<?php 
namespace Home;


$prestataires = PRESTATAIRE::findBy();

$types = TYPEPRESTATAIRE::findBy();

$title = "GPA | Tous vos prestataires ";
?>