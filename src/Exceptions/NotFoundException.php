<?php

declare(strict_types=1);

namespace DPD\Exceptions;

use Throwable;

/**
 * Exception levée lorsqu'une ressource n'est pas trouvée (404)
 */
class NotFoundException extends DPDException
{
	public const DEFAULT_MESSAGE = 'Resource not found.';

	public function __construct(
		string $message = self::DEFAULT_MESSAGE,
		int $code = 0,
		?Throwable $previous = null
	) {
		parent::__construct($message, $code, $previous);
	}
}
