<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

            <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-7">
                    <h2 class="text-uppercase">Les demandes en attente</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-7 gras">Afficher toutes les demandes</div>
                            <div class="offset-1"></div>
                            <div class="col-xs-4">
                             <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" class="onoffswitch-checkbox" id="example1">
                                    <label class="onoffswitch-label" for="example1">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                 <div class="row">
                    <div class="col-sm-6">
                        <div class="widget style1 lazur-bg">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <span> Validées ce mois </span>
                                    <h2 class="font-bold"><?= start0(count(Home\DEMANDEVEHICULE::valideesCeMois()))  ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="widget style1 yellow-bg">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <span> Annulées ce mois</span>
                                    <h2 class="font-bold"><?= start0(count(Home\DEMANDEVEHICULE::annuleesCeMois()))  ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper wrapper-content animated fadeInRight">
                                <?php foreach ($demandes as $key => $demande) {
                                    $demande->actualise(); ?>
                                    <div class="vote-item  <?= ($demande->etat_id != Home\ETAT::ENCOURS;)?'fini':'' ?> ">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="vote-actions" style="margin-right: 6%; height: 100%">
                                                    <div class="vote-icon" data-toggle="tooltip" title="<?= ($demande->typedemandevehicule_id == 1)?'Mission programmée':'Mission inopinée'; ?>" >
                                                        <i class="fa fa-car <?= ($demande->typedemandevehicule_id == 1)?'text-danger':'' ?>"> </i>
                                                    </div>
                                                </div>
                                                <span class="vote-title"><u class="text-info">#<?= $demande->ticket ?></u>  // <?= $demande->objet ?></span>
                                                <span><?= $demande->comment ?></span><br>
                                                <span>Du <?= depuis($demande->started) ?> au <?= depuis($demande->finished) ?></span><br>
                                                <u><i>*** <?= $demande->caracteristique() ?>  // <?= $demande->with_chauffeur() ?></i></u>
                                                <div class="vote-info">
                                                   <i class="fa fa-clock-o"></i> <a>Emise <?= depuis($demande->created) ?></a><br>
                                                   <i class="fa fa-user"></i> <a>Demandé par <?= $demande->utilisateur->name() ?> de <b><?= $demande->utilisateur->departement->sigle() ?></b></a>
                                               </div>
                                           </div>
                                           <div class="col-md-3 text-right">
                                            <div class="vote-icon">
                                                <?php 
                                                if ($demande->etat_id == Home\ETAT::ENCOURS;) {
                                                  if ($demande->typedemandevehicule_id == 1) {
                                                     if ($demande->etats >= 1) { ?>
                                                         <i class="fa fa-check text-green" data-toggle="tooltip" title="Demande validée la DRH"> </i>
                                                     <?php }
                                                     if ($demande->etats >= 2) { ?>
                                                         <i class="fa fa-check text-green" data-toggle="tooltip" title="Demande validée le DG / CSDG"> </i>
                                                     <?php }
                                                     if ($demande->etats >= 3) { ?>
                                                         <i class="fa fa-check text-green" data-toggle="tooltip" title="Demande validée la DAPA"> </i>
                                                     <?php }
                                                 }else{
                                                    if($demande->etat_id == 1){ ?>
                                                     <i class="fa fa-check text-green" data-toggle="tooltip" title="Demande validée le DG / CSDG"> </i>
                                                 <?php }
                                             }
                                         }else{ ?>
                                             <i class="fa fa-close text-red" data-toggle="tooltip" title="Demande annulée par <?= $demande->motif ?>"> </i>
                                         <?php }
                                         ?>
                                     </div>
                                     <?php if ($demande->etat_id == Home\ETAT::ENCOURS;) { ?>
                                         <button data-toggle="modal" data-target="#modal-validerdemande" onclick="session('demandevehicule', <?= $demande->getId(); ?>)" class="btn btn-white btn-sm"><i class="fa fa-check text-green"></i> Valider </button>
                                         <button class="btn btn-white btn-sm" data-toggle=tooltip title="refuser la demande" onclick="annuler(  <?= $demande->getId(); ?>)"><i class="fa fa-close text-red"></i></button>
                                     <?php } ?>
                                 </div>
                             </div>
                         </div>
                     <?php  } ?>

                 </div>
             </div>
         </div>
     </div>
 </div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>

<?php include($this->rootPath("composants/assets/modals/modal-entretienvehicule2.php")); ?> 

<div class="modal inmodal fade" id="modal-validerdemande">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Valider la demande de véhicule</h4>
                <p>Pour valider la demande, veuillez selectionner le véhicule, au besoin le chauffeur</p>
            </div>
            <form method="POST" id="formValiderDemande">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-8 b-r">
                            <h3 class="m-t-none m-b">Choisissez le véhicule pour la demande</h3>
                            <!-- TODO liste des vehicules disponibles -->
                            <div class="row">
                                <?php foreach (Home\VEHICULE::libres() as $key => $vehicule) {
                                    $vehicule->actualise(); ?>
                                    <div class="col-sm-6">
                                        <div class="contact-box cursor vehiculeSelect"  id="<?= $vehicule->getId(); ?>" style="padding: 5px;">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="text-center">
                                                        <img alt="image" style="height: 50px;" class="m-t-xs" src="<?= $this->stockage("images", "vehicules", $vehicule->image) ?>">
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
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-sm-4"><h4>Choisissez le chauffeur</h4>
                            <!-- TODO liste des chauffeurs disponibles -->
                            <div class="text-left">
                               <?php foreach (Home\CHAUFFEUR::open() as $key => $chauffeur) { ?>
                                <div class="contact-box cursor chauffeurSelect" id="<?= $chauffeur->getId(); ?>" style="padding: 2px;">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="text-center">
                                                <img alt="image" style="height: 40px;" class="m-t-xs" src="<?= $this->stockage("images", "chauffeurs", $chauffeur->image) ?>">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <h4 style="margin: 0"><strong><?= $chauffeur->name();  ?></strong></h4>
                                            <span>Permis <?= $chauffeur->typepermis;  ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?> 
                        </div>
                    </div>
                </div>
            </div><hr>
            <div class="container">
                <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                <button class="btn btn-sm btn-danger pull-right"><i class="fa fa-refresh"></i> Valider la demande</button>
            </div>
            <br>
        </form>
    </div>
</div>
</div>


</div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


</body>

</html>
