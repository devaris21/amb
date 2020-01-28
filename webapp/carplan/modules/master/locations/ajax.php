<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "vehicule") {
	$datas = [];
	if (getSession("vehicules") != null) {
		$datas = getSession("vehicules");
	}
	$vehicule = new VEHICULE;
	$vehicule->time = uniqid();
	$vehicule->hydrater($_POST);
	$vehicule->location = 1;
	$vehicule->comment .= " Ce véhicule est en location chez nous !";
	$vehicule->possession = 1;
	$datas[] = $vehicule;
	session("vehicules", $datas);
	affichage();
}


if ($action == "supVehicule") {
	$datas = [];
	if (getSession("vehicules") != null) {
		$datas = getSession("vehicules");
	}
	foreach ($datas as $key => $value) {
		if ($value->time == $id) {
			unset($datas[$key]);
		}
	}
	session("vehicules", $datas);
	affichage();
}


function affichage(){
	if (getSession("vehicules") != null) {
		foreach (getSession("vehicules") as $key => $vehicule) { ?>
			<tr>
				<td>
					<span><?= $vehicule->modele ?></span><br>
					<span><?= $vehicule->immatriculation ?></span>
				</td>
				<td>
					<span><?= $vehicule->kilometrage ?> au compteur</span><br>
					<span><?= $vehicule->couleur ?></span>
				</td>
				<td>
					<span><?= $vehicule->nb_porte ?> portes</span><br>
					<span><?= $vehicule->nb_place ?> places</span><br>
					<span><?= $vehicule->puissance ?> cheveaux</span>
				</td>
				<td class="cursor" onclick="supVehicule(<?= $vehicule->time ?>)"><i class="fa fa-close text-red"></i></td>
			</tr>
		<?php }
	}
}


if ($action == "location") {
	if (getSession("vehicules") != null) {
		$location = new LOCATION;
		$location->hydrater($_POST);
		$location->typelocation_id = 1;
		$data = $location->enregistre();
		if ($data->status) {
			foreach (getSession("vehicules") as $key => $vehicule) {
				$vehicule->prestataire_id = $location->prestataire_id;
				$vehicule->date_mise_circulation = $location->started;
				$vehicule->date_sortie = $location->finished;
				$vehicule->comment = "Ce véhicule est en location";
				$result = $vehicule->enregistre();
				if ($result->status) {
					$loc = new LOCATION_VEHICULE;
					$loc->location_id = $data->lastid;
					$loc->vehicule_id = $result->lastid;
					$loc->enregistre();
				}
			}
			unset_session("vehicules");
		}
	}else{
		$data->status = false;
		$data->message = "Veuillez enregistrer au moins un vehicule !";
	}
	echo json_encode($data);
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



if ($action == "pret") {
	if (getSession("vehiculesp") != null) {
		$preteur = new PRETEUR;
		$preteur->hydrater($_POST);
		$data = $preteur->save();
		if ($data->status) {
			$location = new LOCATION;
			$location->hydrater($_POST);
			$location->typelocation_id = 2;
			$location->preteur_id = $data->lastid;
			$data = $location->enregistre();
			
			if ($data->status) {
				foreach (getSession("vehiculesp") as $key => $vid) {
					$loc = new LOCATION_VEHICULE;
					$loc->location_id = $data->lastid;
					$loc->vehicule_id = $vid;
					$loc->enregistre();
				}
				unset_session("vehiculesp");
			}
		}
	}else{
		$data->status = false;
		$data->message = "Veuillez enregistrer au moins un vehicule !";
	}
	echo json_encode($data);
}