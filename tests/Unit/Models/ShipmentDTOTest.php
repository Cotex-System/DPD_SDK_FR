<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Models;

use DPD\Models\Response\ShipmentDTO;
use PHPUnit\Framework\TestCase;

class ShipmentDTOTest extends TestCase
{
    public function testCanCreateShipmentDTOFromArray(): void
    {
        $data = [
            'id' => 'test-123',
            'parcelNumbers' => ['05757894762505'],
            'status' => 'pending',
            'createdAt' => '2026-02-17 10:00:00',
        ];

        $shipment = new ShipmentDTO($data);

        $this->assertEquals('test-123', $shipment->getId());
        $this->assertEquals(['05757894762505'], $shipment->getParcelNumbers());
        $this->assertEquals('pending', $shipment->getStatus());
    }

    public function testToArrayRemovesNullValues(): void
    {
        $data = [
            'id' => 'test-123',
            'status' => 'pending',
            'trackingNumber' => null,
        ];

        $shipment = new ShipmentDTO($data);
        $result = $shipment->toArray();

        $this->assertArrayHasKey('id', $result);
        $this->assertArrayHasKey('status', $result);
        $this->assertArrayNotHasKey('trackingNumber', $result);
    }

    public function testCanGetAndSetValues(): void
    {
        $shipment = new ShipmentDTO();
        
        $this->assertNull($shipment->getId());
        $this->assertNull($shipment->getStatus());
    }
}
