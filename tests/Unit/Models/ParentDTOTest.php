<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Models;

use DPD\Models\ParentDTO;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class ParentDTOTest extends TestCase
{
    public function testFromHydratesNestedDtoAndDtoArrays(): void
    {
        $dto = ParentDTOTestContainerDTO::from([
            'child' => ['name' => 'Alice'],
            'items' => [
                ['id' => 10],
                ['id' => 11],
            ],
            'itemsGeneric' => [
                ['id' => 20],
            ],
            'privateValue' => 'secret',
            'unknownProperty' => 'ignored',
        ]);

        self::assertInstanceOf(ParentDTOTestContainerDTO::class, $dto);
        self::assertInstanceOf(ParentDTOTestChildDTO::class, $dto->child);
        self::assertSame('Alice', $dto->child?->name);

        self::assertIsArray($dto->items);
        self::assertContainsOnlyInstancesOf(ParentDTOTestItemDTO::class, $dto->items ?? []);
        self::assertSame(10, $dto->items[0]->id);
        self::assertSame(11, $dto->items[1]->id);

        self::assertIsArray($dto->itemsGeneric);
        self::assertContainsOnlyInstancesOf(ParentDTOTestItemDTO::class, $dto->itemsGeneric ?? []);
        self::assertSame(20, $dto->itemsGeneric[0]->id);

        self::assertSame('secret', $dto->privateValue());
    }

    public function testFromSupportsDtoWithRequiredConstructor(): void
    {
        $dto = ParentDTOTestCtorRequiredDTO::from(['id' => 77]);

        self::assertSame(77, $dto->id);
    }

    public function testFromJsonInvalidThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid JSON input for DTO hydration.');

        ParentDTOTestContainerDTO::fromJson('{invalid json}');
    }

    public function testTryFromReturnsNullOnInvalidInput(): void
    {
        self::assertNull(ParentDTOTestContainerDTO::tryFrom('{invalid json}'));
    }

    public function testToArraySerializesNestedDtosAndArrays(): void
    {
        $container = ParentDTOTestContainerDTO::from([
            'child' => ['name' => 'Bob'],
            'items' => [
                ['id' => 1],
            ],
            'itemsGeneric' => [
                ['id' => 2],
            ],
        ]);

        $array = $container->toArray();

        self::assertIsArray($array['child']);
        self::assertSame('Bob', $array['child']['name']);
        self::assertSame(1, $array['items'][0]['id']);
        self::assertSame(2, $array['itemsGeneric'][0]['id']);
    }
}

final class ParentDTOTestContainerDTO extends ParentDTO
{
    public ?ParentDTOTestChildDTO $child = null;

    /** @var ParentDTOTestItemDTO[]|null */
    public ?array $items = null;

    /** @var array<ParentDTOTestItemDTO>|null */
    public ?array $itemsGeneric = null;

    private ?string $privateValue = null;

    public function privateValue(): ?string
    {
        return $this->privateValue;
    }
}

final class ParentDTOTestChildDTO extends ParentDTO
{
    public ?string $name = null;
}

final class ParentDTOTestItemDTO extends ParentDTO
{
    public ?int $id = null;
}

final class ParentDTOTestCtorRequiredDTO extends ParentDTO
{
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
