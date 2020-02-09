<?php 
namespace Home;

$title = "AMB | Toutes les affectations de véhicules !";

$produits = PRODUIT::findBy([], [], ["name"=>"ASC"]);

?>