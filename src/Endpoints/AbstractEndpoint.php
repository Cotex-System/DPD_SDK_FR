<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Http\SoapGateway;
use InvalidArgumentException;

abstract class AbstractEndpoint
{
    protected SoapGateway $gateway;

    public function __construct(
        SoapGateway $gateway
    ) {
        $this->gateway = $gateway;
    }

    /**
     * @param array<string, mixed> $payload
     */
    protected function call(string $operation, array $payload = []): mixed
    {
        return $this->gateway->call($operation, $payload);
    }

    /**
     * @param array<int, mixed> $arguments
     */
    public function __call(string $name, array $arguments): mixed
    {
        $payload = $arguments[0] ?? [];

        if (!is_array($payload)) {
            throw new InvalidArgumentException('First argument must be an array payload.');
        }

        /** @var array<string, mixed> $payload */
        return $this->call($name, $payload);
    }
}
