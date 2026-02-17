<?php

declare(strict_types=1);

namespace DPD\Tests\Feature;

use DPD\DPDClient;
use DPD\Models\AddressDTO;
use DPD\Models\Request\ShipmentCreationDTO;
use DPD\Models\ShipmentServiceDTO;
use DPD\Models\ShipmentParcelDTO;
use DPD\Models\Response\ShipmentDTO;
use PHPUnit\Framework\TestCase;

/**
 * Test fonctionnel complet : création d'un envoi
 */
class ShipmentCreationTest extends TestCase
{
    private ?DPDClient $client = null;

    protected function setUp(): void
    {
        if (empty(getenv('DPD_ORIGINAL_TOKEN'))) {
            $this->markTestSkipped('DPD original token not configured');
        }

        $this->client = new DPDClient([
            'api_url' => getenv('DPD_API_URL') ?: 'https://api-sandbox.dpd.fr',
            'original_token' => getenv('DPD_ORIGINAL_TOKEN'),
            'token_id' => getenv('DPD_TOKEN_ID') ?: 'SDK Token',
            'token_ttl' => getenv('DPD_TOKEN_TTL') !== false ? (int) getenv('DPD_TOKEN_TTL') : null,
        ]);

        $this->client->authenticate();
    }

    public function testCanCreateShipmentWithDTOs(): void
    {
        // Créer l'adresse d'expédition
        $senderAddress = new AddressDTO();
        $senderAddress
            ->setName('Test Sender')
            ->setStreet('123 Test Street')
            ->setCity('Paris')
            ->setPostalCode('75001')
            ->setCountry('FR')
            ->setPhone('+33123456789')
            ->setEmail('sender@test.com');

        // Créer l'adresse de destination
        $receiverAddress = new AddressDTO();
        $receiverAddress
            ->setName('Test Receiver')
            ->setStreet('456 Receiver Ave')
            ->setCity('Lyon')
            ->setPostalCode('69001')
            ->setCountry('FR')
            ->setPhone('+33987654321')
            ->setEmail('receiver@test.com');

        // Créer le service
        $service = new ShipmentServiceDTO();
        $service->setServiceAlias('DPD_CLASSIC');

        // Créer un colis
        $parcel = new ShipmentParcelDTO();
        $parcel
            ->setWeight(2.5)
            ->setSize('M');

        // Créer l'envoi
        $shipmentData = new ShipmentCreationDTO();
        $shipmentData
            ->setSenderAddress($senderAddress)
            ->setReceiverAddress($receiverAddress)
            ->setService($service)
            ->setParcels([$parcel]);

        // Envoyer la requête
        $shipment = $this->client->shipments()->create($shipmentData->toArray());

        // Vérifications
        $this->assertInstanceOf(ShipmentDTO::class, $shipment);
        $this->assertNotEmpty($shipment->getId());
        $this->assertNotEmpty($shipment->getParcelNumbers());
    }
}
