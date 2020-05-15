<?php 
namespace Home;

$datas = DEPARTEMENT::findBy(["id ="=>DEPARTEMENT::DPA]);
if (count($datas) == 1) {
	$dep = $datas[0];

	$demandes1 = DEMANDEVEHICULE::findBy(["etat_id ="=>ETAT::ENCOURS, "typemission_id ="=>TYPEMISSION::PROGRAMMEE, "etape ="=>$dep->circuit_programmee-1]);
	$demandes2 = DEMANDEVEHICULE::findBy(["etat_id ="=>ETAT::ENCOURS, "typemission_id ="=>TYPEMISSION::INOPINEE, "etape ="=>$dep->circuit_inopinee-1]);

	$demandes = array_merge($demandes1, $demandes2);

	unset_session("demandeentretien");
	unset_session("vehicule");
	unset_session("chauffeur");

	$title = "AMB | Demandes de véhicules";
}else{

}
?>