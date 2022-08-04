<?php

class Salle
{
    protected $id;
    protected $nom;

    public function __construct($id,$nom)
    {
        $this->id = $id;
        $this->nom = $nom;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function __toString()
    {
        return
        "id : ".$this->id."<br> ".
        "nom : ".$this->nom;
    }
}
