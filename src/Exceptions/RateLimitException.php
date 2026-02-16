<?php

declare(strict_types=1);

namespace DPD\Exceptions;

use Throwable;

/**
 * Exception levée lors de dépassement de limite de taux (429)
 */
class RateLimitException extends DPDException
{
	public const DEFAULT_MESSAGE = 'Rate limit exceeded.';

	public function __construct(
		string $message = self::DEFAULT_MESSAGE,
		int $code = 0,
		?Throwable $previous = null
	) {
		parent::__construct($message, $code, $previous);
	}
}
