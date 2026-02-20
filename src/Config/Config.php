<?php

declare(strict_types=1);

namespace DPD\Config;

final class Config
{
    public const DEFAULT_EPRINT_WSDL = 'https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?WSDL';
    public const DEFAULT_TRACE_WSDL = 'https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?WSDL';

    /**
     * @param array<string, mixed> $values
     */
    public function __construct(
        private readonly array $values = []
    ) {
    }

    public function eprintWsdl(): string
    {
        return (string) ($this->values['eprint_wsdl'] ?? self::DEFAULT_EPRINT_WSDL);
    }

    public function traceWsdl(): string
    {
        return (string) ($this->values['trace_wsdl'] ?? self::DEFAULT_TRACE_WSDL);
    }

    public function eprintLocation(): ?string
    {
        $location = $this->values['eprint_location'] ?? null;

        return $location === null ? null : (string) $location;
    }

    public function traceLocation(): ?string
    {
        $location = $this->values['trace_location'] ?? null;

        return $location === null ? null : (string) $location;
    }

    /**
     * @return array<string, mixed>
     */
    public function soapOptions(): array
    {
        $base = [
            'trace' => true,
            'exceptions' => true,
            'cache_wsdl' => WSDL_CACHE_MEMORY,
            'connection_timeout' => (int) ($this->values['connection_timeout'] ?? 20),
            'encoding' => (string) ($this->values['encoding'] ?? 'UTF-8'),
        ];

        $custom = $this->values['soap_options'] ?? [];

        if (!is_array($custom)) {
            return $base;
        }

        /** @var array<string, mixed> $custom */
        return array_replace($base, $custom);
    }
}
