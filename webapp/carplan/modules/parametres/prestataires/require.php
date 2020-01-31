<?php 
namespace Home;


$prestataires = PRESTATAIRE::findBy();

$types = TYPEPRESTATAIRE::findBy();

$title = "AMB | Tous vos prestataires ";
?>