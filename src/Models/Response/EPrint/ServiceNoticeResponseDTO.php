<?php
namespace DPD\Models\Response\EPrint;
use DPD\Models\ParentDTO;

class ServiceNoticeResponseDTO extends ParentDTO{
    /**     * @var ServiceNotice[]
     * Contenu du code à barres DPD 
     */
    private ?array $serviceNotices;
    public function __construct(array $serviceNotices)
    {
        $this->serviceNotices = $serviceNotices;
    }

    public function getServiceNotices(): ?array
    {
        return $this->serviceNotices;
    }
}