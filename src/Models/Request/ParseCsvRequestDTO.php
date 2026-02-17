<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;

/**
 * Parse CSV Request DTO
 * 
 * Used for parsing CSV data before import
 */
class ParseCsvRequestDTO extends AbstractModel
{
    public function getFile(): ?string
    {
        return $this->get('file');
    }

    public function setFile(?string $file): self
    {
        $this->set('file', $file);
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->get('content');
    }

    public function setContent(?string $content): self
    {
        $this->set('content', $content);
        return $this;
    }

    public function getDelimiter(): ?string
    {
        return $this->get('delimiter');
    }

    public function setDelimiter(?string $delimiter): self
    {
        $this->set('delimiter', $delimiter ?? ',');
        return $this;
    }

    public function getHasHeader(): ?bool
    {
        return $this->get('hasHeader');
    }

    public function setHasHeader(?bool $hasHeader): self
    {
        $this->set('hasHeader', $hasHeader);
        return $this;
    }

    public function getEncoding(): ?string
    {
        return $this->get('encoding');
    }

    public function setEncoding(?string $encoding): self
    {
        $this->set('encoding', $encoding);
        return $this;
    }
}
