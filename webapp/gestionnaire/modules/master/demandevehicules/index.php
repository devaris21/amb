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
                            <div class="col-xs-7 gras text-capitalize">Afficher toutes les demandes</div>
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
                                <div class="col-3">
                                    <i class="fa fa-cloud fa-3x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <span> Demande en cours </span>
                                    <h2 class="font-bold"><?= start0(count(Home\DEMANDEVEHICULE::encours()))  ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="widget style1 yellow-bg">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <span> Validées/Annulées ce mois</span>
                                    <h2 class="font-bold"><?php //start0(count(Home\DEMANDEVEHICULE::valideesCeMois()))  ?> / <?php //start0(count(Home\DEMANDEVEHICULE::annuleesCeMois()))  ?></h2>
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
                                    <div class="vote-item">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="vote-actions" style="margin-right: 6%; height: 100%">
                                                    <div class="vote-icon" data-toggle="tooltip" title="<?= ($demande->typedemandevehicule_id == 1)?'Mission programmée':'Mission inopinée'; ?>" >
                                                        <i class="fa fa-car <?= ($demande->typedemandevehicule_id == 1)?'text-danger':'' ?>"> </i>
                                                    </div>
                                                </div>
                                                <span class="vote-title"><u class="text-info">#<?= $demande->ticket ?></u>  // <?= $demande->objet ?></span>
                                                <span><?= $demande->comment ?></span><br>
                                                <u><i>*** <?= $demande->caracteristique() ?>  // <?= $demande->with_chauffeur() ?></i></u>
                                                <div class="vote-info">
                                                    <i class="fa fa-clock-o"></i> <a>Emise <?= depuis($demande->created) ?></a>
                                                    <i class="fa fa-user"></i> <a>Demandé par <?= $demande->departement->name() ?> // <?= $demande->utilisateur->name() ?></a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-right">
                                                <div class="vote-icon">
                                                    <?php 
                                                    if ($demande->etat_id == 0) {
                                                      if ($demande->typedemandevehicule_id == 1) {
                                                       if ($demande->etats >= 1) { ?>
                                                           <i class="fa fa-check text-green" data-toggle="tooltip" title="Demande validée la DRH"> </i>
                                                       <?php }
                                                       if ($demande->etats >= 2) { ?>
                                                           <i class="fa fa-check text-green" data-toggle="tooltip" title="Demande validée la DAPA"> </i>
                                                       <?php }
                                                       if ($demande->etats >= 3) { ?>
                                                           <i class="fa fa-check text-green" data-toggle="tooltip" title="Demande validée le DG / CSDG"> </i>
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
                                       <button data-toggle="modal" data-target="#modal-validerdemande"  onclick="modification('demandevehicule', <?= $demande->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-check text-green"></i> Valider </button>
                                       <button class="btn btn-white btn-sm" onclick="suppression('demandevehicule', <?= $demande->getId(); ?>)"><i class="fa fa-close text-red"></i></button>
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
                <p>Pour valider la demande, veuillez selectionné le véhicule, au besoin le chauffeur</p>
            </div>
            <form method="POST" id="formLogin">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-8 b-r">
                            <h3 class="m-t-none m-b">Choisissez le véhicule pour la demande</h3>
                            <!-- TODO liste des vehicules disponibles -->
                            <div class="row">
                                <?php foreach (Home\VEHICULE::in() as $key => $vehicule) {
                                    $vehicule->actualise(); ?>
                                    <div class="col-sm-6">
                                        <div class="contact-box cursor" style="padding: 5px;">
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
                            <p>You can create an account:</p>
                            <!-- TODO liste des chauffeurs disponibles -->
                            <p class="text-center">
                                <a href=""><i class="fa fa-sign-in big-icon"></i></a>
                            </p>
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
