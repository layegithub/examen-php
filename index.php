<?php

require_once "Etudiant.php";
require_once "Salle.php";

$Salle = new Salle ("A21","techno web");
$Etudiant = new Etudiant ("3263h","Diallo","Abdoulaye Ly",$Salle);


echo $Etudiant;
