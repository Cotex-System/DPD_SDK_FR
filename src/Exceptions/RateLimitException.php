<?php

declare(strict_types=1);

namespace DPD\Exceptions;

/**
 * Exception levée lors de dépassement de limite de taux (429)
 */
class RateLimitException extends DPDException
{
}
