<?php

declare(strict_types=1);

namespace DPD\Exceptions;

use Throwable;

/**
 * Exception levée lors d'erreurs d'authentification
 */
class AuthenticationException extends DPDException
{
	public const DEFAULT_MESSAGE = 'Authentication failed.';

	public function __construct(
		string $message = self::DEFAULT_MESSAGE,
		int $code = 0,
		?Throwable $previous = null
	) {
		parent::__construct($message, $code, $previous);
	}
}
