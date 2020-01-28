<?php 
namespace Home;
require '../../../../../core/root/includes.php';
use Native\ROOTER;
use Native\RESPONSE;
use Native\FICHIER;


$data = new RESPONSE;
extract($_POST);

if ($action == "image") {
	$datas = VEHICULE::findBy(["id ="=>getSession("vehicule_id")]);
	if (count($datas) == 1) {
		$vehicule = $datas[0];
		if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["image"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "vehicules", $a);

				$vehicule->image = $result->filename;
				$data = $vehicule->save();
			}else{
				$data->status = false;
				$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
			}
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
	}
	echo json_encode($data);
}


if ($action == "comment") {
	$datas = VEHICULE::findBy(["id="=>getSession("vehicule_id")]);
	if (count($datas) == 1) {
		$vehicule = $datas[0];
		$vehicule->actualise();
		$vehicule->comment = $val;
		$vehicule->historique("Mis à jour du bloc note du véhicule".$vehicule->marque->name." $vehicule->modele immatriculé $vehicule->immatriculation");
		$data = $vehicule->save();
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
	}
	echo json_encode($data);
}



if ($action == "reaffectation") {
	if ($ladate !="" && $ladate >= dateAjoute()) {
		$datas = EMPLOYE::findBy(["id="=>getSession("employe_connecte_id")]);
		if (count($datas) == 1) {
			$employe = $datas[0];
			if ($employe->verifier_password($password)) {
				$datas = AFFECTATION::findBy(["id="=>$id]);
				if (count($datas) == 1) {
					$affectation = $datas[0];
					$data = $affectation->reaffectation($ladate);
				}else{
					$data->status = false;
					$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
				}
			}else{
				$data->status = false;
				$data->message = "Votre mot de passe n'est pas correcte !";
			}
		}else{
			$data->status = false;
			$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
		}
	}else{
		$data->status = false;
		$data->message = "La nouvelle date de reaffectation n'est pas correcte !";
	}
	echo json_encode($data);
}



if ($action == "indisponible") {
	$datas = EMPLOYE::findBy(["id="=>getSession("employe_connecte_id")]);
	if (count($datas) == 1) {
		$employe = $datas[0];
		if ($employe->verifier_password($password)) {
			$datas = VEHICULE::findBy(["id="=>getSession("vehicule_id")]);
			if (count($datas) == 1) {
				$vehicule = $datas[0];
				$data = $vehicule->indisponible();
			}else{
				$data->status = false;
				$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
			}
		}else{
			$data->status = false;
			$data->message = "Votre mot de passe n'est pas correcte !";
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
	}
	echo json_encode($data);
}


if ($action == "disponible") {
	$datas = EMPLOYE::findBy(["id="=>getSession("employe_connecte_id")]);
	if (count($datas) == 1) {
		$employe = $datas[0];
		if ($employe->verifier_password($password)) {
			$datas = VEHICULE::findBy(["id="=>getSession("vehicule_id")]);
			if (count($datas) == 1) {
				$vehicule = $datas[0];
				$data = $vehicule->disponible();
			}else{
				$data->status = false;
				$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
			}
		}else{
			$data->status = false;
			$data->message = "Votre mot de passe n'est pas correcte !";
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
	}
	echo json_encode($data);
}


if ($action == "out") {
	$datas = EMPLOYE::findBy(["id="=>getSession("employe_connecte_id")]);
	if (count($datas) == 1) {
		$employe = $datas[0];
		if ($employe->verifier_password($password)) {
			$datas = VEHICULE::findBy(["id="=>getSession("vehicule_id")]);
			if (count($datas) == 1) {
				$vehicule = $datas[0];
				$data = $vehicule->out();
			}else{
				$data->status = false;
				$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
			}
		}else{
			$data->status = false;
			$data->message = "Votre mot de passe n'est pas correcte !";
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
	}
	echo json_encode($data);
}


if ($action == "pret") {
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
			$loc = new LOCATION_VEHICULE;
			$loc->location_id = $data->lastid;
			$loc->vehicule_id = getSession("vehicule_id");
			$loc->enregistre();
		}
	}
	echo json_encode($data);
}





if ($action == "compte_carplane") {
	$datas = CARPLANE::findBy(["id="=> $id]);
	if (count($datas) == 1) {
		$carplane = $datas[0];
		if (filter_var($carplane->email, FILTER_VALIDATE_EMAIL)) {
			$datas = AFFECTATION::findBy(["carplane_id ="=> $id]);
			if (count($datas) == 0) {
				$data = $carplane->create_compte();
			}else{
				$data->status = false;
				$data->message = "Ce bénéficiaire a déjà un compte dédié !";
			}
		}else{
			$data->status = false;
			$data->message = "Veuillez renseigner l'email du bénéficiaire ou le corriger !!!";
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
	}
	echo json_encode($data);
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ($action == "cartegrises") {
	$rooter = new ROOTER;
	$datas = IMAGECARTEGRISE::findBy(["cartegrise_id = "=>$id]);
	foreach ($datas as $key => $image) {
		$image->actualise() ?>
		<figure class="effect-julia">
			<img src="<?= $rooter->image($dossier, $image->photo) ?>" class="img-thumbnail" alt="<?= $image->cartegrise->name ?>" style="width: 100%" >
			<figcaption>
				<h2 style="font-size: 20px"><?= $image->cartegrise->name ?></h2>
				<div>
					<p onclick="voir()" class="cursor"><a target="_blank" href="<?= $rooter->image($dossier, $image->photo) ?>"><i class="fa fa-close"></i> Voir la photo</a></p>
					<p onclick="suppression('imagecartegrise', <?= $image->getId() ?>)" class="cursor"><i class="fa fa-close"></i> Supprimer photo</p>
				</div>
			</figcaption>
		</figure>
	<?php }
}



if ($action == "piecevehicules") {
	$rooter = new ROOTER;
	$datas = IMAGEPIECEVEHICULE::findBy(["piecevehicule_id = "=>$id]);
	foreach ($datas as $key => $image) {
		$image->actualise() ?>
		<figure class="effect-julia">
			<img src="<?= $rooter->image($dossier, $image->photo) ?>" class="img-thumbnail" alt="<?= $image->piecevehicule->name ?>" style="width: 100%" >
			<figcaption>
				<h2 style="font-size: 20px"><?= $image->piecevehicule->name ?></h2>
				<div>
					<p onclick="voir()" class="cursor"><a target="_blank" href="<?= $rooter->image($dossier, $image->photo) ?>"><i class="fa fa-close"></i> Voir la photo</a></p>
					<p onclick="suppression('imagepiecevehicule', <?= $image->getId() ?>)" class="cursor"><i class="fa fa-close"></i> Supprimer photo</p>
				</div>
			</figcaption>
		</figure>
	<?php }
}


if ($action == "assurances") {
	$rooter = new ROOTER;
	$datas = IMAGEASSURANCE::findBy(["assurance_id = "=>$id]);
	foreach ($datas as $key => $image) {
		$image->actualise() ?>
		<figure class="effect-julia">
			<img src="<?= $rooter->image($dossier, $image->photo) ?>" class="img-thumbnail" alt="<?= $image->assurance->name ?>" style="width: 100%" >
			<figcaption>
				<h2 style="font-size: 20px"><?= $image->assurance->name ?></h2>
				<div>
					<p onclick="voir()" class="cursor"><a target="_blank" href="<?= $rooter->image($dossier, $image->photo) ?>"><i class="fa fa-close"></i> Voir la photo</a></p>
					<p onclick="suppression('imageassurance', <?= $image->getId() ?>)" class="cursor"><i class="fa fa-close"></i> Supprimer photo</p>
				</div>
			</figcaption>
		</figure>
	<?php }
}



if ($action == "visitetechniques") {
	$rooter = new ROOTER;
	$datas = IMAGEVISITETECHNIQUE::findBy(["visitetechnique_id = "=>$id]);
	foreach ($datas as $key => $image) {
		$image->actualise() ?>
		<figure class="effect-julia" style=" min-height: 300px;">
			<img src="<?= $rooter->image($dossier, $image->photo) ?>" class="img-thumbnail" alt="<?= $image->visitetechnique->name ?>" style="width: 100%;" >
			<figcaption>
				<h2 style="font-size: 20px"><?= $image->visitetechnique->name ?></h2>
				<div>
					<p class="cursor"><a target="_blank" href="<?= $rooter->image($dossier, $image->photo) ?>"><i class="fa fa-close"></i> Voir la photo</a></p>
					<p onclick="suppression('imagevisitetechnique', <?= $image->getId() ?>)" class="cursor"><i class="fa fa-close"></i> Supprimer photo</p>
				</div>
			</figcaption>
		</figure>
	<?php }
}



if ($action == "entretiens") {
	$rooter = new ROOTER;
	$datas = IMAGEENTRETIENVEHICULE::findBy(["entretienvehicule_id = "=>$id]);
	foreach ($datas as $key => $image) {
		$image->actualise() ?>
		<figure class="effect-julia">
			<img src="<?= $rooter->image($dossier, $image->photo) ?>" class="img-thumbnail" alt="<?= $image->entretienvehicule->name ?>" style="width: 100%; min-height: 200px" >
			<figcaption>
				<h2 style="font-size: 20px"><?= $image->entretienvehicule->name ?></h2>
				<div>
					<p class="cursor"><a target="_blank" href="<?= $rooter->image($dossier, $image->photo) ?>"><i class="fa fa-close"></i> Voir la photo</a></p>
					<p onclick="suppression('imageentretienvehicule', <?= $image->getId() ?>)" class="cursor"><i class="fa fa-close"></i> Supprimer photo</p>
				</div>
			</figcaption>
		</figure>
	<?php }
}



if ($action == "sinistres") {
	$rooter = new ROOTER;
	$datas = IMAGESINISTRE::findBy(["sinistre_id = "=>$id]);
	foreach ($datas as $key => $image) {
		$image->actualise() ?>
		<figure class="effect-julia">
			<img src="<?= $rooter->image($dossier, $image->photo) ?>" class="img-thumbnail" alt="<?= $image->sinistre->name ?>" style="width: 100%" >
			<figcaption>
				<h2 style="font-size: 20px"><?= $image->sinistre->name ?></h2>
				<div>
					<p onclick="voir()" class="cursor"><a target="_blank" href="<?= $rooter->image($dossier, $image->photo) ?>"><i class="fa fa-close"></i> Voir la photo</a></p>
					<p onclick="suppression('imagesinistre', <?= $image->getId() ?>)" class="cursor"><i class="fa fa-close"></i> Supprimer photo</p>
				</div>
			</figcaption>
		</figure>
	<?php }
}



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($action == "cartegrise") {
	$piece = new CARTEGRISE;
	$piece->hydrater($_POST);
	$piece->vehicule_id = getSession("vehicule_id");
	$data = $piece->enregistre();
	if ($data->status) {
		if (isset($_FILES["photo1"]) && $_FILES["photo1"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo1"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "cartegrises", $a);
				$photo = new IMAGECARTEGRISE;
				$photo->cartegrise_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}

		if (isset($_FILES["photo2"]) && $_FILES["photo2"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo2"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "cartegrises", $a);
				$photo = new IMAGECARTEGRISE;
				$photo->cartegrise_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}
	}
	echo json_encode($data);
}


if ($action == "piece") {
	$piece = new PIECEVEHICULE;
	$piece->hydrater($_POST);
	$piece->vehicule_id = getSession("vehicule_id");
	$data = $piece->enregistre();
	if ($data->status) {
		if (isset($_FILES["photo1"]) && $_FILES["photo1"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo1"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "piecevehicules", $a);
				$photo = new IMAGEPIECEVEHICULE;
				$photo->piecevehicule_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}

		if (isset($_FILES["photo2"]) && $_FILES["photo2"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo2"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "piecevehicules", $a);
				$photo = new IMAGEPIECEVEHICULE;
				$photo->piecevehicule_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}
	}
	echo json_encode($data);
}


if ($action == "assurance") {
	$piece = new ASSURANCE;
	$piece->hydrater($_POST);
	$piece->vehicule_id = getSession("vehicule_id");
	$data = $piece->enregistre();
	if ($data->status) {
		if (isset($_FILES["photo1"]) && $_FILES["photo1"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo1"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "assurances", $a);
				$photo = new IMAGEASSURANCE;
				$photo->assurance_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}

		if (isset($_FILES["photo2"]) && $_FILES["photo2"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo2"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "assurances", $a);
				$photo = new IMAGEASSURANCE;
				$photo->assurance_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}
	}
	echo json_encode($data);
}





if ($action == "visite") {
	$visite = new VISITETECHNIQUE;
	$visite->hydrater($_POST);
	$visite->vehicule_id = getSession("vehicule_id");
	$data = $visite->enregistre();
	if ($data->status) {
		if (isset($_FILES["photo1"]) && $_FILES["photo1"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo1"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "visitetechniques", $a);
				$photo = new IMAGEVISITETECHNIQUE;
				$photo->visitetechnique_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}

		if (isset($_FILES["photo2"]) && $_FILES["photo2"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo2"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "visitetechniques", $a);
				$photo = new IMAGEVISITETECHNIQUE;
				$photo->visitetechnique_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}
	}
	echo json_encode($data);
}





if ($action == "entretien") {
	$visite = new ENTRETIENVEHICULE;
	$visite->hydrater($_POST);
	$visite->vehicule_id = getSession("vehicule_id");
	$data = $visite->enregistre();
	if ($data->status) {
		if (isset($_FILES["photo1"]) && $_FILES["photo1"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo1"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "entretiens", $a);
				$photo = new IMAGEENTRETIENVEHICULE;
				$photo->entretienvehicule_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}

		if (isset($_FILES["photo2"]) && $_FILES["photo2"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo2"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "entretiens", $a);
				$photo = new IMAGEENTRETIENVEHICULE;
				$photo->entretienvehicule_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}
	}
	echo json_encode($data);
}




if ($action == "sinistre") {
	$visite = new SINISTRE;
	$visite->hydrater($_POST);
	$visite->vehicule_id = getSession("vehicule_id");
	$data = $visite->enregistre();
	if ($data->status) {
		if (isset($_FILES["photo1"]) && $_FILES["photo1"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo1"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "sinistres", $a);
				$photo = new IMAGESINISTRE;
				$photo->sinistre_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}

		if (isset($_FILES["photo2"]) && $_FILES["photo2"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo2"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "sinistres", $a);
				$photo = new IMAGESINISTRE;
				$photo->sinistre_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}


		if (isset($_FILES["photo3"]) && $_FILES["photo3"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["photo3"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "sinistres", $a);
				$photo = new IMAGESINISTRE;
				$photo->sinistre_id = $data->lastid;
				$photo->name = $name;
				$photo->photo = $result->filename;
				$photo->enregistre();
			}
		}

	}
	echo json_encode($data);
}




if ($action == "affectation") {
	$carplane = new CARPLANE;
	$carplane->hydrater($_POST);
	$data = $carplane->enregistre();
	if ($data->status) {
		$affectation = new AFFECTATION;
		$affectation->hydrater($_POST);
		$affectation->carplane_id = $data->lastid;
		$affectation->vehicule_id = getSession("vehicule_id");
		$data = $affectation->enregistre();
	}
	echo json_encode($data);
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



if ($action == "retirer") {
	$maclass = $table;
	$table = TABLE::fullyClassName($table);
	if (class_exists($table)) {
		$datas = $table::findBy(["id="=>$id]);
		if (count($datas) == 1) {
			$element = $datas[0];
			$element->actualise();
			$data = $element->retirer();
		}else{
			$data->status = false;
			$data->message = "Une eurreur s'est produite pendant le processus, veuillez recommencer !";
		}
	}else{
		$data->status = false;
		$data->message = "Une eurreur s'est produite pendant le processus, veuillez recommencer !";
	}
	echo json_encode($data);
}

