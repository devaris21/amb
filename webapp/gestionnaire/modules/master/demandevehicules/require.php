<?php 
namespace Home;

$demandes = DEMANDEVEHICULE::amb();
unset_session("demandeentretien");
unset_session("vehicule");
unset_session("chauffeur");

$title = "AMB | Demandes de véhicules";
?>