<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/direction/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/direction/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

            <?php include($this->rootPath("webapp/direction/elements/templates/header.php")); ?>  

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-7">
                    <h2 class="text-uppercase">Les demandes en attente d'approbation</h2>
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
                <div class="ibox-content" style="min-height: 350px;">
                    <?php if (count($demandes) > 0) { ?>
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper wrapper-content animated fadeInRight">
                                <?php foreach ($demandes as $key => $demande) {
                                    $demande->actualise(); ?>
                                    <div class="vote-item  <?= ($demande->etat_id != Home\ETAT::ENCOURS)?'fini':'' ?> ">
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
                                                    <i class="fa fa-clock-o"></i> <a>Emise <?= depuis($demande->created) ?></a>
                                                    <i class="fa fa-user"></i> <a>Demandé par <?= $demande->departement->name() ?> // <?= $demande->utilisateur->name() ?></a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-right">
                                                <div class="vote-icon">
                                                    <?php if ($demande->etat_id == Home\ETAT::ENCOURS) {
                                                        for ($i=0; $i < $demande->etape; $i++) { ?>
                                                            <i class="fa fa-check text-green" data-toggle="tooltip" title="Etape <?= $demande->etape ?> terminée"> </i>
                                                        <?php } 
                                                    }elseif($demande->etat_id == Home\ETAT::VALIDEE){ ?>
                                                        <i class="fa fa-check text-green" data-toggle="tooltip" title="Demande validée le DG / CSDG"> </i>
                                                        <?php       
                                                    }else{ ?>
                                                        <i class="fa fa-close text-red" data-toggle="tooltip" title="Demande annulée pour '<?= $demande->refus_comment ?>' "> </i>
                                                    <?php }
                                                    ?>
                                                </div>
                                                <?php if ($demande->etat_id == Home\ETAT::ENCOURS) { ?>
                                                    <button onclick="approuver(<?= $demande->getId(); ?>)" class="btn btn-white btn-sm"><i class="fa fa-check text-green"></i> Approuver </button>
                                                    <button class="btn btn-white btn-sm" data-toggle=tooltip title="Refuser la demande" onclick="refuser(<?= $demande->getId(); ?>)"><i class="fa fa-close text-red"></i></button>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php  } ?>

                            </div>
                        </div>
                    </div>
                <?php }else{ ?>
                    <h2 class="text-center" style="margin-top: 7%; color: #ccc"><i class="fa fa-folder-open-o fa-4x"></i><br><br> Aucune demande en attente d'approbation pour le moment !</h2>
                <?php } ?>
            </div>
        </div>
    </div>


    <?php include($this->rootPath("webapp/direction/elements/templates/footer.php")); ?>


</div>
</div>


<?php include($this->rootPath("webapp/direction/elements/templates/script.php")); ?>


</body>

</html>
