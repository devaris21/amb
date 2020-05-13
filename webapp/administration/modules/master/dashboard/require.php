<?php 
namespace Home;
use myclasses\Table;

$title = "AMB-Admin systeme | Tableau de bord";
$compte = MYCOMPTE::getAll()[0];
$compte->actualise();
$personnelle = (
	count(ADMIN::getAll()) + 
	count(CARPLAN::getAll()) +
	count(UTILISATEUR::getAll()) +
	count(GESTIONNAIRE::getAll()) +
	count(PRESTATAIRE::getAll())
);

$nbre_connecte = (count(CONNEXION::getAll()) - count(CONNEXION::findBy(['date_deconnexion !=' => ""])));

$flux_jour = count(HISTORY::findBy(['created >' => date('Y-m-d'). ' 00:00:00']));
$flux_total = count(HISTORY::getAll());
?>