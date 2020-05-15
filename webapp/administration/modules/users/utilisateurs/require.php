<?php 
namespace Home;

$title = "AMB | Departements & responsables !";

$departements = DEPARTEMENT::findBy(["visibility ="=>1]);

?>