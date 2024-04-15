<?php

class reclamC
{
    private ?int $idR = null;
    private ?int $idU = null;
    private ?string $subject = null;
    private ?string $description = null;
    private ?string $feedback = null;

    public function __construct($idR, $idU, $subject, $description, $feedback)
    {
        $this->idR = $idR;
        $this->idU = $idU;
        $this->subject = $subject;
        $this->description = $description;
        $this->feedback = $feedback;
    }

    public function getIdR(): ?int
    {
        return $this->idR;
    }

    public function setIdR(?int $idR): void
    {
        $this->idR = $idR;
    }

    public function getIdU(): ?string
    {
        return $this->idU;
    }

    public function setIdU(?string $idU): void
    {
        $this->idU = $idU;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): void
    {
        $this->subject = $subject;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getFeedback(): ?string
    {
        return $this->feedback;
    }

    public function setFeedback(?string $feedback): void
    {
        $this->feedback = $feedback;
    }
}

?>
