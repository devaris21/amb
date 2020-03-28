<?php 
namespace Home;

$title = "AMB-".$utilisateur->departement->name." | Les missions";

$utilisateur->departement->fourni("mission");
$missions = $utilisateur->departement->missions;

?>