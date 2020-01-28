<?php 
namespace Home;

$title = "Tous les sinistres enregistrés";

$sinistres = SINISTRE::findBy(["etat_id ="=>1]);
$declarations = SINISTRE::findBy(["etat_id ="=>0]);


?>