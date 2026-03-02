<?php
namespace DPD\Models\Request\EPrint;
use DPD\Models\ParentDTO;

class GetServiceNoticeAnswersRequestDTO extends ParentDTO{
    /**     * @var string
     * Type de notification de service pick|dely
     */
    public string $type;
    public ?string $language="F";

    public function __construct(string $type, ?string $language = "F")
    {
        $this->setType($type);
        $this->language = $language;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        if($type !== "pick" && $type !== "dely"){
            throw new \InvalidArgumentException("Type must be either 'pick' or 'dely'");
        }
        $this->type = $type;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }
    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }
}