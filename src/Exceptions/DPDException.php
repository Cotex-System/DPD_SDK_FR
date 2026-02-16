<?php

declare(strict_types=1);

namespace DPD\Exceptions;

use Exception;
use Throwable;

/**
 * Exception de base pour toutes les exceptions DPD
 */
class DPDException extends Exception
{
    public function __construct(
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
