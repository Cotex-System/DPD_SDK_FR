<?php

declare(strict_types=1);

namespace DPD\Config;

final class Config
{
    public const DEFAULT_EPRINT_WSDL = 'https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?WSDL';
    public const DEFAULT_TRACE_WSDL = 'https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?WSDL';
    public const DEFAULT_EPRINT_LOCATION = 'https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx';
    public const DEFAULT_TRACE_LOCATION = 'https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx';

    /**
     * @param array<string, mixed> $values
     */
    public function __construct(
        private readonly array $values = []
    ) {
    }

    public function eprintWsdl(): string
    {
        return $this->resolveServiceValue('eprint_wsdl', self::DEFAULT_EPRINT_WSDL);
    }

    public function traceWsdl(): string
    {
        return $this->resolveServiceValue('trace_wsdl', self::DEFAULT_TRACE_WSDL);
    }

    public function eprintLocation(): ?string
    {
        return $this->resolveServiceValue('eprint_location', self::DEFAULT_EPRINT_LOCATION);
    }

    public function traceLocation(): ?string
    {
        return $this->resolveServiceValue('trace_location', self::DEFAULT_TRACE_LOCATION);
    }

    public function environment(): string
    {
        $value = strtolower((string) ($this->values['environment'] ?? $this->env('DPD_ENV') ?? 'test'));

        return in_array($value, ['prod', 'production'], true) ? 'prod' : 'test';
    }

    public function userId(): ?string
    {
        $fromConfig = $this->values['user_id'] ?? $this->values['userid'] ?? null;
        if (is_string($fromConfig) && $fromConfig !== '') {
            return $fromConfig;
        }

        return $this->resolveCredential('userid');
    }

    public function password(): ?string
    {
        $fromConfig = $this->values['password'] ?? null;
        if (is_string($fromConfig) && $fromConfig !== '') {
            return $fromConfig;
        }

        return $this->resolveCredential('password');
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

    private function resolveCredential(string $name): ?string
    {
        $name = strtoupper($name);
        $prefix = strtoupper($this->environment());

        $keys = [
            sprintf('DPD_%s_%s', $prefix, $name),
            sprintf('DPD_%s', $name),
        ];

        foreach ($keys as $key) {
            $value = $this->env($key);
            if ($value !== null && $value !== '') {
                return $value;
            }
        }

        return null;
    }

    private function resolveServiceValue(string $key, string $default): string
    {
        $configValue = $this->values[$key] ?? null;
        if (is_string($configValue) && $configValue !== '') {
            return $configValue;
        }

        $envPrefix = strtoupper($this->environment());
        $envKey = strtoupper($key);

        $envCandidates = [
            sprintf('DPD_%s_%s', $envPrefix, $envKey),
            sprintf('DPD_%s', $envKey),
        ];

        foreach ($envCandidates as $candidate) {
            $value = $this->env($candidate);
            if ($value !== null && $value !== '') {
                return $value;
            }
        }

        return $default;
    }

    private function env(string $key): ?string
    {
        $value = getenv($key);

        if ($value !== false) {
            return (string) $value;
        }

        if (isset($_ENV[$key])) {
            return (string) $_ENV[$key];
        }

        return null;
    }
}
