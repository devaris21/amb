<?php 
namespace Home;


$produits = PRODUIT::findBy(["typeproduit_id="=>1], [], ["name"=>"ASC"]);
$services = PRODUIT::findBy(["typeproduit_id="=>2], [], ["name"=>"ASC"]);
$vehicules = PRODUIT::findBy(["typeproduit_id="=>3], [], ["name"=>"ASC"]);


$title = "AMB | Tous vos produits ";
?>