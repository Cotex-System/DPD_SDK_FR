<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Error Response DTO
 * 
 * Standard error response
 */
class ErrorResponseDTO extends AbstractModel
{
    public function getError(): ?string
    {
        return $this->get('error');
    }

    public function getErrorDescription(): ?string
    {
        return $this->get('errorDescription');
    }
}
