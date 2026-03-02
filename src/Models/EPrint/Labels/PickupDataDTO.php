<?php
namespace DPD\Models\EPrint\Labels;
use DPD\Models\ParentDTO;

class PickupDataDTO extends ParentDTO{
    /**     * @var string
     * Optionnel (par défaut : 08:00) Heure de début de la plage horaire de ramassage (format HH:mm) 
     */
    public ?string $time_from;
    /**     * @var string
     * Optionnel (par défaut : 18:00) Heure de fin de la plage horaire de ramassage (format HH:mm) 
     */
    public ?string $time_to;
    /**     * @var string
     * Commentaire / livraison
     */
    public ?string $remark;
    /**     * @var string
     * Commentaire / enlèvement - ramasse
     */
    public ?string $pick_remark;
    /**     * @var bool
     * Validité du jour d’enlèvement - ramasse (true) après vérification via IsPickableOndate
     */
    public ?bool $dayCheckDone;
    public function __construct(?string $time_from = null, ?string $time_to = null, ?string $remark = null, ?string $pick_remark = null, ?bool $dayCheckDone = null)
    {
        $this->time_from = $time_from;
        $this->time_to = $time_to;
        $this->remark = $remark;
        $this->pick_remark = $pick_remark;
        $this->dayCheckDone = $dayCheckDone;
    }
    /**     * Get the value of time_from
     */    public function getTime_from(): ?string
    {        return $this->time_from;    }
    /**     * Set the value of time_from
     */    public function setTime_from(?string $time_from): self
    {        $this->time_from = $time_from;
        return $this;    }
    /**     * Get the value of time_to
     */    public function getTime_to(): ?string
    {        return $this->time_to;    }
    /**     * Set the value of time_to
     */    public function setTime_to(?string $time_to): self
    {        $this->time_to = $time_to;
        return $this;    }
    /**     * Get the value of remark
     */    public function getRemark(): ?string
    {        return $this->remark;    }
    /**     * Set the value of remark
     */    public function setRemark(?string $remark): self
    {        $this->remark = $remark;
        return $this;    }
    /**     * Get the value of pick_remark
     */    public function getPick_remark(): ?string
    {        return $this->pick_remark;    }
    /**     * Set the value of pick_remark 
     */    public function setPick_remark(?string $pick_remark): self
    {        $this->pick_remark = $pick_remark;
        return $this;    }
    /**     * Get the value of dayCheckDone
     */    public function getDayCheckDone(): ?bool
    {        return $this->dayCheckDone;    }
    /**     * Set the value of dayCheckDone
     */    public function setDayCheckDone(?bool $dayCheckDone): self
    {        $this->dayCheckDone = $dayCheckDone;
        return $this;    }
}