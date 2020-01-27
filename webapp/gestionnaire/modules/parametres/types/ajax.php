<?php 
namespace Home;
require '../../../../../core/root/includes.php';
use Native\FICHIER;
use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "stock") {
	if (is_numeric($stock) && intval($stock) > 0) {
			$datas = EQUIPEMENT::findBy(["id ="=>$id]);
			if (count($datas) == 1) {
				$equipement = $datas[0];
				$equipement->stock = $stock;
				$equipement->historique("Modification du stock de l'equipement $equipement->name à $stock unités !");
				$data = $equipement->save();
			}else{
				$data->status = false;
				$data->message = "Une erreur s'est produite pendant l'opération! Veuillez recommencer !";
			}
		}else{
			$data->status = false;
			$data->message = "la quantité renseignée n'est pas correcte !";
		}
	echo json_encode($data);
}

