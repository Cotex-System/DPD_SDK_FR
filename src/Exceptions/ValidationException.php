<?php

declare(strict_types=1);

namespace DPD\Exceptions;

use Throwable;

/**
 * Exception levée lors d'erreurs de validation
 */
class ValidationException extends DPDException
{
    /** @var array<string, mixed> */
    private array $errors;

    /**
     * @param string $message
     * @param int $code
     * @param array<string, mixed> $errors
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message = '',
        int $code = 0,
        array $errors = [],
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    /**
     * Obtenir les erreurs de validation
     *
     * @return array<string, mixed>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Obtenir une erreur spécifique
     *
     * @param string $field
     * @return mixed
     */
    public function getError(string $field): mixed
    {
        return $this->errors[$field] ?? null;
    }

    /**
     * Vérifier si un champ a une erreur
     */
    public function hasError(string $field): bool
    {
        return isset($this->errors[$field]);
    }
}
