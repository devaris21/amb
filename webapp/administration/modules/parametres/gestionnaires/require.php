<?php 
namespace Home;


$gestionnaires = GESTIONNAIRE::findBy(["visibility ="=>1]);

$title = "AMB | Tous vos gestionnaires en internes ";
?>