<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;
use Native\ROOTER;
use Native\EMAIL;
use Native\FICHIER;
$data = new RESPONSE;
extract($_POST);




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($action == "afficher") {
	$rooter = new ROOTER();
	$datas = CHAUFFEUR::findBy(["id ="=>$id]);
	if (count($datas) == 1) {
		$chauffeur = $datas[0];
		$chauffeur->actualise();
		$chauffeur->fourni("chauffeur_vehicule");
		$vehicules = $chauffeur->chauffeur_vehicules;
		 ?>
		  <div class="ibox-content">
                <div class="tab-content">
                    <div id="contact-1" class="tab-pane active">
                        <div class="row m-b-lg">
                            <div class="col-lg-4 text-center">
                                <div class="m-b-sm">
                                    <img alt="image" class="img-thumbnail" src="<?= $rooter->stockage("images", "chauffeurs", $chauffeur->image) ?>"
                                    style="width: 100%">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <h5><?= $chauffeur->name()  ?></h5>
                                <p>
                                    Permis catégorie <?= $chauffeur->typepermis ?><br>
                                    N° <?= $chauffeur->numero_permis ?><br>
                                    Expire le <?= datecourt($chauffeur->date_fin_permis) ?>
                                </p>
                                <button data-toggle="modal" data-target="#modal-chauffeur"  onclick="modification('chauffeur', <?= $chauffeur->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-pencil text-green"></i> Modifier</button>
                                <button class="btn btn-white btn-sm" onclick="suppressionWithPassword('chauffeur', <?= $chauffeur->getId(); ?>)"><i class="fa fa-close text-red"></i> Supprimer</button>
                            </div>
                        </div><hr>
                        <div class="client-detail">
                            <div class="full-height-scroll">

                                <strong>Véhicules affiliés</strong>
                                <div>
                                    <?php if (count($vehicules) < 1) { ?>
                                    	<br>
                                    	<h3 class=" text-center">Aucun véhicule pour l'instant !</h3>
                                    <?php }else{
                                    foreach ($vehicules as $key => $vehicule) {
                                        $vehicule->actualise(); ?>
                                        <div class="">
                                            <div class="contact-box cursor" style="padding: 5px;">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="text-center">
                                                            <img alt="image" style="height: 50px;" class="m-t-xs" src="<?= $rooter->stockage("images", "vehicules", $vehicule->image) ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-8" style="font-size: 11px;">
                                                        <h3 style="margin: 0"><strong><?= $vehicule->immatriculation ?></strong></h3>
                                                        <address>
                                                            <strong><?= $vehicule->marque->name ?></strong><br>
                                                            <?= $vehicule->modele ?>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } } ?>
                                </div>

                                <hr/>
                        <!--         <strong>Timeline activity</strong>
                                <div id="vertical-timeline" class="vertical-container dark-timeline">
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon gray-bg">
                                            <i class="fa fa-coffee"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <p>Conference on the sales results for the previous year.
                                            </p>
                                            <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon gray-bg">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <p>Many desktop publishing packages and web page editors now use Lorem.
                                            </p>
                                            <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon gray-bg">
                                            <i class="fa fa-bolt"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <p>There are many variations of passages of Lorem Ipsum available.
                                            </p>
                                            <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		 <?php
	}else{ ?>
		<h3 class="text-center">Aucun personnel trouvé !</h3>
	<?php }
}



if ($action == "entretien2") {
	if (getSession("demandeentretien") != null) {
		$entretien = new ENTRETIENVEHICULE;
		$demande = getSession("demandeentretien");
		$entretien->cloner($demande);
		$entretien->hydrater($_POST);
		$entretien->name = $demande->typeentretienvehicule->name." suite à la demande d'entretien ".$demande->ticket;
		$entretien->setId(null);
		$data = $entretien->enregistre();
		if ($data->status) {
			unset_session("demandeentretien");
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite lors de l'opération! Veuillez recommencer";
	}
	echo json_encode($data);
}




if ($action == "refuser") {
	$datas = DEMANDEENTRETIEN::findBy(["id ="=>$id]);
	if (count($datas) == 1) {
		$demande = $datas[0];
		$data = $demande->refuser();
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite lors de l'opération! Veuillez recommencer";
	}
	echo json_encode($data);
}
