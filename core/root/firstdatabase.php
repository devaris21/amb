<?php 
namespace Home;

//n'oublie pas de configurer la date par defaut PARAMS
//n'oublie pas d'importer la base de données des marques de vehicules

$datas = ["Patente", "Carte de stationnement", "Autre"];
foreach ($datas as $key => $value) {
	$item = new TYPEPIECEVEHICULE();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$datas = ["Mission programmée", "Mission inopinée"];
foreach ($datas as $key => $value) {
	$item = new TYPEMISSION();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$datas = ["Produit", "Service", "voiture"];
foreach ($datas as $key => $value) {
	$item = new TYPEPRODUIT();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$datas = ["Affectation permanente", "Affectation temporaire"];
foreach ($datas as $key => $value) {
	$item = new TYPEAFFECTATION();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}


$datas = ["Espèces", "Carte", "Soute", "Bon valeur"];
foreach ($datas as $key => $value) {
	$item = new TYPEDOTATION();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$datas = ["Location de véhicule", "Prêt de véhicule"];
foreach ($datas as $key => $value) {
	$item = new TYPELOCATION();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$datas = ["Pieces Mécaniques", "Utilitaire de véhicule", "Outils de néttoyage"];
foreach ($datas as $key => $value) {
	$item = new TYPEEQUIPEMENT();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$datas = ["Voiture", "Car", "Pick-up", "Moto"];
foreach ($datas as $key => $value) {
	$item = new TYPEVEHICULE();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$datas = ["Entretien dû au sinistre", "vidange simple", "Vidange complète", "Lavage Auto", "Autre"];
foreach ($datas as $key => $value) {
	$item = new TYPEENTRETIENVEHICULE();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$datas = ["Véhicules de mission", "Véhicules de Pool", "Cars de ramassage", "Véhicules loués"];
foreach ($datas as $key => $value) {
	$item = new GROUPEVEHICULE();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$datas = [GROUPEVEHICULE::VEHICULEMISSION, GROUPEVEHICULE::VEHICULELOUEE];
foreach ($datas as $key => $value) {
	$item = new GROUPEVEHICULEOPEN();
	$item->groupevehicule_id = $value;
	$item->setProtected(1);
	$item->save();
}


$datas = ["Léger accrochage", "Crevaison", "Défaillance moteur", "Accident grave", "Vol", "Autre"];
foreach ($datas as $key => $value) {
	$item = new TYPESINISTRE();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$item = new SEXE();
$item->name = "Homme";
$item->abreviation = "H";
$item->setProtected(1);
$item->save();

$item = new SEXE();
$item->name = "Femme";
$item->abreviation = "F";
$item->setProtected(1);
$item->save();




$item = new PARAMS();
$item->societe = "Devaris 21";
$item->email = "info@devaris21.com";
$item->email_rh = "info@devaris21.com";
$item->email_dg = "info@devaris21.com";
$item->devise = "Fcfa";
$item->timeout = 10;
$item->delai_alert = 10;
$item->setProtected(1);
$item->enregistre();


$item = new MYCOMPTE();
$item->identifiant = strtoupper(substr(uniqid(), 5, 7));
$item->tentative = 0;
$item->expired = dateAjoute(7);
$item->setProtected(1);
$item->enregistre();


$datas = ["Consessionnaire", "Garage", "Lavage Auto", "Autre"];
foreach ($datas as $key => $value) {
	$item = new TYPEPRESTATAIRE();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$item = new PRESTATAIRE();
$item->typeprestataire_id = TYPEPRESTATAIRE::AUTRE;
$item->name = "Devaris PRESTATAIRE";
$item->email = "info@devaris21.com";
$item->login = "...";
$item->password = "...";
$item->adresse = "...";
$item->contact = "...";
$item->setProtected(1);
$item->save();




$item = new ETAT();
$item->name = "Annulé";
$item->class = "danger";
$item->setProtected(1);
$item->save();

$item = new ETAT();
$item->name = "En cours";
$item->class = "warning";
$item->setProtected(1);
$item->save();

$item = new ETAT();
$item->name = "Partiellement";
$item->class = "info";
$item->setProtected(1);
$item->save();

$item = new ETAT();
$item->name = "Validé";
$item->class = "success";
$item->setProtected(1);
$item->save();



$item = new ETATPIECE();
$item->name = "Annulé";
$item->class = "info";
$item->setProtected(1);
$item->save();

$item = new ETATPIECE();
$item->name = "Périmé";
$item->class = "danger";
$item->setProtected(1);
$item->save();

$item = new ETATPIECE();
$item->name = "Valide";
$item->class = "warning";
$item->setProtected(1);
$item->save();




$item = new ETATVEHICULE();
$item->name = "Déclassé";
$item->class = "danger";
$item->setProtected(1);
$item->save();

$item = new ETATVEHICULE();
$item->name = "Indisponible";
$item->class = "danger";
$item->setProtected(1);
$item->save();

$item = new ETATVEHICULE();
$item->name = "Dans le parc";
$item->class = "primary";
$item->setProtected(1);
$item->save();

$item = new ETATVEHICULE();
$item->name = "En mission";
$item->class = "succes";
$item->setProtected(1);
$item->save();

$item = new ETATVEHICULE();
$item->name = "En entretien";
$item->class = "warning";
$item->setProtected(1);
$item->save();

$item = new ETATVEHICULE();
$item->name = "Sinistré";
$item->class = "danger";
$item->setProtected(1);
$item->save();

$item = new ETATVEHICULE();
$item->name = "Affecté temporairement";
$item->class = "info";
$item->setProtected(1);
$item->save();

$item = new ETATVEHICULE();
$item->name = "Véhicule prété";
$item->class = "info";
$item->setProtected(1);
$item->save();

$item = new ETATVEHICULE();
$item->name = "Véhicule loué";
$item->class = "navy";
$item->setProtected(1);
$item->save();



$item = new ETATCHAUFFEUR();
$item->name = "Libre";
$item->class = "primary";
$item->setProtected(1);
$item->save();

$item = new ETATCHAUFFEUR();
$item->name = "En mission";
$item->class = "warning";
$item->setProtected(1);
$item->save();

$item = new ETATCHAUFFEUR();
$item->name = "Indisponible";
$item->class = "danger";
$item->setProtected(1);
$item->save();




$item = new ADMIN();
$item->name = "Super Administrateur";
$item->email = "info@devaris21.com";
$item->adresse = "...";
$item->contact = "...";
$item->login = "root";
$item->password = "5e9795e3f3ab55e7790a6283507c085db0d764fc";
$item->setProtected(1);
$data = $item->save();


$datas = ["Gestionnaire en chef", "Gestionnaire"];
foreach ($datas as $key => $value) {
	$item = new TYPEGESTIONNAIRE();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$item = new GESTIONNAIRE();
$item->typegestionnaire_id = TYPEGESTIONNAIRE::CHEF;
$item->name = "Super Gestionnaire";
$item->email = "info@devaris21.com";
$item->adresse = "...";
$item->contact = "...";
$item->login = "root";
$item->password = "5e9795e3f3ab55e7790a6283507c085db0d764fc";
$item->setProtected(1);
$data = $item->save();




$datas = ["Manuelle", "Seme-automatique", "Automatique"];
foreach ($datas as $key => $value) {
	$item = new TYPETRANSMISSION();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

$datas = ["Diesel", "Essence/Super", "Gasoil", "Electrique", "Gaz", "GPL/GNV"];
foreach ($datas as $key => $value) {
	$item = new ENERGIE();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}




$datas = ["standart"];
foreach ($datas as $key => $value) {

	$item = new TYPESUGGESTION();
	$item->name = $value;
	$item->setProtected(1);
	$item->save();
}

?>