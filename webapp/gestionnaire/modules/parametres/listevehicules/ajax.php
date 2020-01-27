<?php 
namespace Home;
require '../../../../../core/root/includes.php';
use Native\ROOTER;
use Native\RESPONSE;
use Native\FICHIER;


$data = new RESPONSE;
extract($_POST);


if ($action == "modele") {
	$rooter = new ROOTER;
	$datas = MODELE::findBy(["marque_id = "=>$id]);
	foreach ($datas as $key => $modele) {
		$modele->actualise() ?>
		<option value="<?= $modele->get_id() ?>"><?= $modele->name ?></option>
	<?php }
}

