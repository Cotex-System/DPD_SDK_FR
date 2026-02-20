<?php

declare(strict_types=1);

namespace DPD\Models\Contracts;

interface ArraySerializable
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(): array;
}
