<?php 
namespace Home;


$encours = MISSION::findBy(["etat_id = "=>0]);
$autres = MISSION::findBy(["etat_id != "=>0]);

$title = "GPA | Tous votre Parc Auto ";
?>