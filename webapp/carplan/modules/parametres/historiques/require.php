<?php 
namespace Home;


$title = "GPA | Historiques & Traçabilité ";

$notifications = NOTIFICATION::findBy(["admin ="=>1, "etat_id ="=>0]);


?>