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
                            <div class="col-xs-7 gras text-capitalize">Afficher tous les entretiens</div>
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
                                    <h2 class="font-bold"><?= start0(count(Home\DEMANDEENTRETIEN::encours()))  ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="widget style1 yellow-bg">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <span> Validées/Annulées ce mois</span>
                                    <h2 class="font-bold"><?= start0(count(Home\DEMANDEENTRETIEN::valideesCeMois()))  ?> / <?= start0(count(Home\DEMANDEENTRETIEN::annuleesCeMois()))  ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Toutes les entretiens de véhicules</h5>
                    <div class="ibox-tools">
                        <button style="margin-top: -4%;" data-toggle="modal" data-target="#modal-entretienvehicule" class="btn btn-primary dim btn-xs"><i class="fa fa-plus"></i> Nouvel entretien de véhicule</button>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <?php foreach ($entretiens as $key => $entretien) {
                            $entretien->actualise(); ?>
                            <div class="vote-item <?= ($entretien->etat_id != 0)?'fini':'' ?>">
                                <div class="row">
                                    <div class="col-md-7 border-right">
                                        <div class="vote-actions" style="margin-right: 7%; height: 100%">
                                            <div class="vote-icon">
                                                <span class="label label-<?= $entretien->etat->class ?>"><?= $entretien->etat->name ?></span>
                                         </div>
                                     </div>
                                     <div>
                                        <span class="vote-title"><u class="text-info">#<?= $entretien->ticket ?></u> // <?= $entretien->typeentretienvehicule->name ?></span>
                                        <span><?= $entretien->comment ?></span>
                                        <div class="vote-info">
                                          <i class="fa fa-clock-o"></i> 
                                          <?php if ($entretien->etat_id == -1) { ?>
                                            <a href="#">Annulée <?= depuis($entretien->date_approuve) ?></a>
                                        <?php }else if ($entretien->etat_id == 0){ ?>
                                            <a href="#">Emise <?= depuis($entretien->created) ?></a>
                                        <?php }else if ($entretien->etat_id == 1){ ?>
                                            <a href="#">Du <?= datecourt($entretien->started) ?> au <?= datecourt($entretien->finished) ?></a>
                                        <?php } ?>
                                        <i class="fa fa-wrench"></i> <a href="#">Entretien par <?= $entretien->prestataire->name() ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <a class="row" style="color: black; margin-top: 10%" href="<?= $this->url("gestionnaire", "master", "vehicule", $entretien->vehicule_id) ?>">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" style="height: 40px;" class="m-t-xs" src="<?= $this->stockage("images", "vehicules", $entretien->vehicule->image) ?>">
                                        </div>
                                    </div>
                                    <div class="col-8" style="font-size: 11px;">
                                        <h3 style="margin: 0"><strong><?= $entretien->vehicule->immatriculation ?></strong></h3>
                                        <address>
                                            <strong><?= $entretien->vehicule->marque->name ?></strong><br>
                                            <?= $entretien->vehicule->modele ?>
                                        </address>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-1 text-right border-right">
                                <img style="width: 100%;" onclick="openImage('<?= $this->stockage("images", "demandeentretiens", $entretien->image) ?>')" class="m-t-xs cursor" src="<?= $this->stockage("images", "demandeentretiens", $entretien->image) ?>">
                            </div>
                            <div class="col-md-1 text-right">
                                <?php if ($entretien->etat_id == 1) { ?>
                                    <div class="vote-icon">
                                        <i class="fa fa-check text-green" data-toggle="tooltip" title="Entretien terminé avec succes"> </i>
                                    </div>
                                <?php } else if ($entretien->etat_id == -1) { ?>
                                    <div class="vote-icon">
                                        <i class="fa fa-close text-red" data-toggle="tooltip" title="Entretien annulé"> </i>
                                    </div>

                                <?php }else if ($entretien->etat_id == 0){ ?>
                                    <div class="btn-group">
                                        <button data-toggle="tooltip" title="Entretien terminé avec succes !" onclick="validerEntretien(<?= $entretien->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-check text-green"></i> </button>
                                        <button data-toggle="tooltip" title="Entretien échoué" class="btn btn-white btn-sm" onclick="annulerEntretien(<?= $entretien->getId() ?>)"><i class="fa fa-close text-red"></i></button>
                                    </div>
                                <?php } ?>                                      
                            </div>
                        </div>
                    </div>
                <?php  } ?>

            </div>
        </div>
    </div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>

<?php include($this->rootPath("composants/assets/modals/modal-entretienvehicule2.php")); ?> 


</div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


</body>

</html>
