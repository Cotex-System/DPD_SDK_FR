<?php

namespace DPD\Models\Response\EPrint;

use DPD\Models\ParentDTO;


class GetNoticeAnswersResponseDTO extends ParentDTO
{
    /**     * @var string[]
     * Liste des réponses aux questions de la notification de service
     */
    private ?array $answers;

    public function __construct(?array $answers = null)
    {
        $this->answers = $answers;
    }
    /**     * Get the value of answers
     * @return string[]|null
     */    public function getAnswers(): ?array
    {
        return $this->answers;
    }
 
}
