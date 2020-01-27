<?php 
namespace Home;


$gestionnaires = GESTIONNAIRE::findBy(["visibility ="=>1]);

$title = "GPA | Tous vos gestionnaires en internes ";
?>