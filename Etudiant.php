<?php

class Etudiant
{
    private $id;
    private $nom;
    private $prenom;
    private $Salle;

    public function __construct ($id,$nom,$prenom,$Salle)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->Salle = $Salle;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getSalle()
    {
        return $this->Salle;
    }
    public function __toString()
    {
        return
        "id : ".$this->id."<br> ".
        "nom : ".$this->nom."<br> ".
        "prenom : ".$this->prenom."<br> ".
        "salle : ".$this->Salle;
    }
}