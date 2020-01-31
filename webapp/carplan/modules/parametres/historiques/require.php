<?php 
namespace Home;


$title = "AMB | Historiques & Traçabilité ";

$notifications = NOTIFICATION::findBy(["admin ="=>1, "etat_id ="=>0]);


?>