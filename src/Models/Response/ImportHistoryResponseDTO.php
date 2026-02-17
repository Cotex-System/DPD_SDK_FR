<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Import History Response DTO
 * 
 * Returned when getting import history
 */
class ImportHistoryResponseDTO extends AbstractModel
{
    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getTemplateId(): ?string
    {
        return $this->get('templateId');
    }

    public function getTemplateName(): ?string
    {
        return $this->get('templateName');
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function getProcessedCount(): ?int
    {
        return $this->get('processedCount');
    }

    public function getSuccessCount(): ?int
    {
        return $this->get('successCount');
    }

    public function getErrorCount(): ?int
    {
        return $this->get('errorCount');
    }

    public function getErrors(): ?array
    {
        return $this->get('errors');
    }

    public function getStartedAt(): ?string
    {
        return $this->get('startedAt');
    }

    public function getCompletedAt(): ?string
    {
        return $this->get('completedAt');
    }

    public function getUserId(): ?string
    {
        return $this->get('userId');
    }

    public function getUserName(): ?string
    {
        return $this->get('userName');
    }
}
