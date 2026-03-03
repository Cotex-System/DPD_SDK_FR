<?php

declare(strict_types=1);

namespace DPD\Tests\Support;

use SoapClient;

final class FakeSoapClient extends SoapClient
{
    /**
     * @var array<int, array{operation:string,args:array<int, mixed>}>
     */
    public array $calls = [];

    /**
     * @param array<string, mixed> $responses
     */
    private array $responses;

    /**
     * @param array<string, mixed> $responses
     */
    public function __construct(array $responses = [])
    {
        $this->responses = $responses;
    }

    /**
     * @param array<int, mixed> $args
     * @param array<string, mixed>|null $options
     */
    public function __soapCall(
        string $name,
        array $args,
        ?array $options = null,
        $inputHeaders = null,
        &$outputHeaders = null
    ): mixed {
        $this->calls[] = [
            'operation' => $name,
            'args' => $args,
        ];

        return $this->responses[$name] ?? null;
    }
}
