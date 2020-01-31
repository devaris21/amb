<?php 
namespace Home;

$title = "AMB | Toutes les affectations de véhicules !";

$clients = CLIENT::findBy([], [], ["representant"=>"ASC"]);

?>