<?php 
namespace Home;


$title = "AMB-".$utilisateur->departement->name." | Tableau de bord";

$demandes = $utilisateur->departement->fourni("demandevehicule", ["etat_id ="=>ETAT::ENCOURS]);

$utilisateurs = $utilisateur->departement->fourni("utilisateur");

$missions = $utilisateur->departement->fourni("mission", ["etat_id ="=>ETAT::ENCOURS]);

$datas = DEPARTEMENT::getAll();

?>