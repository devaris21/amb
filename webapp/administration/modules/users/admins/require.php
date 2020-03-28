<?php 
namespace Home;

$title = "AMB | Tous les gestionnaires du parc !";

$admins = ADMIN::findBy([], [], ["name"=>"ASC", "lastname"=>"ASC"]);

?>