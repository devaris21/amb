<?php 
namespace Home;


$title = "AMB-".$utilisateur->departement->name." | Tableau de bord";

$utilisateur->departement->fourni("demandevehicule");
$demandes = $utilisateur->departement->demandevehicules;

$utilisateur->departement->fourni("utilisateur");
$utilisateurs = $utilisateur->departement->utilisateurs;

$utilisateur->departement->fourni("mission");
$missions = $utilisateur->departement->missions;


?>