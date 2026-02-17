<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Models;

use DPD\Models\AddressDTO;
use PHPUnit\Framework\TestCase;

class AddressDTOTest extends TestCase
{
    public function testCanCreateAddressDTOWithFluentSetters(): void
    {
        $address = new AddressDTO();
        
        $result = $address
            ->setName('John Doe')
            ->setStreet('123 Main St')
            ->setCity('Paris')
            ->setPostalCode('75001')
            ->setCountry('FR');

        $this->assertInstanceOf(AddressDTO::class, $result);
        $this->assertEquals('John Doe', $address->getName());
        $this->assertEquals('123 Main St', $address->getStreet());
        $this->assertEquals('Paris', $address->getCity());
        $this->assertEquals('75001', $address->getPostalCode());
        $this->assertEquals('FR', $address->getCountry());
    }

    public function testToArrayOnlyIncludesSetValues(): void
    {
        $address = new AddressDTO();
        $address
            ->setName('John Doe')
            ->setCity('Paris')
            ->setCountry('FR');

        $result = $address->toArray();

        $this->assertArrayHasKey('name', $result);
        $this->assertArrayHasKey('city', $result);
        $this->assertArrayHasKey('country', $result);
        $this->assertArrayNotHasKey('street', $result);
        $this->assertArrayNotHasKey('postalCode', $result);
    }
}
