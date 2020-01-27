<?php 
namespace Home;


$energies      = ENERGIE::findBy([], [], ["name"=>"ASC"]);
$sinistres     = TYPESINISTRE::findBy([], [], ["name"=>"ASC"]);
$marques       = MARQUE::findBy([], [], ["name"=>"ASC"]);
$pieces        = TYPEPIECEVEHICULE::findBy([], [], ["name"=>"ASC"]);
$entretiens    = TYPEENTRETIENVEHICULE::findBy([], [], ["name"=>"ASC"]);
$typevehicules = TYPEVEHICULE::findBy([], [], ["name"=>"ASC"]);
$typedemandes = TYPEDEMANDEVEHICULE::findBy([], [], ["name"=>"ASC"]);
$groupevehicules = GROUPEVEHICULE::findBy([], [], ["name"=>"ASC"]);

$title = "GPA | Toutes vos options de paramètrages";
?>