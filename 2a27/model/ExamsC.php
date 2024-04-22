<?php

class Exams
{
    private ?int $id= null;

    private ?string $nom = null;
    private ?string $type = null;
    private ?string $langue = null;
    private ?int $niveau = null;



    public function __construct($id, $nom, $type, $langue,$niveau)
    {    $this->id = $id;
       
        $this->nom = $nom;
        $this->type = $type;
        $this->langue = $langue;
        $this->niveau = (int)$niveau;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    public function getLangue()
    {
        return $this->langue;
    }

    public function setLangue($langue)
    {
        $this->langue = $langue;
        return $this;
    }
    public function getNiveau()
    {
        return $this->niveau;
    }

    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
        return $this;
    }
}
?>