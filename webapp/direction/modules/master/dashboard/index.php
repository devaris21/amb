<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/direction/elements/templates/head.php")); ?>

<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/direction/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg" style="overflow: hidden;">

            <?php include($this->rootPath("webapp/direction/elements/templates/header.php")); ?> 

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-9">
                    <h2 class="text-uppercase"><?= $utilisateur->departement->sigle() ?></h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-7 gras text-capitalize"><?= $utilisateur->departement->name() ?></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <h5>Demandes en cours</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins">22 285,400</h1>
                                        <div class="stat-percent font-bold text-navy">20% <i class="fa fa-level-up"></i></div>
                                        <small>New orders</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <span class="label label-info float-right">Monthly</span>
                                        <h5>Orders</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins">60 420,600</h1>
                                        <div class="stat-percent font-bold text-info">40% <i class="fa fa-level-up"></i></div>
                                        <small>New orders</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <h5>Missions en cours</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins">$ 120 430,800</h1>
                                        <div class="stat-percent font-bold text-warning">16% <i class="fa fa-level-up"></i></div>
                                        <small>New orders</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h5>Vos demandes de véhicules à vous</h5>
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
                                        <div class="ibox-tools">
                                            <button style="margin-top: -5%;" data-toggle="modal" data-target="#modal-demandevehicule" class="btn btn-primary btn-xs dim"><i class="fa fa-plus"></i> Demander un véhicule</button>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="animated fadeInRight">
                                                    <?php foreach ($demandes as $key => $demande) {
                                                        $demande->actualise(); ?>
                                                        <div class="vote-item  <?= ($demande->etat_id != Home\ETAT::ENCOURS;)?'fini':'' ?>">
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <div class="vote-actions" style="margin-right: 6%; height: 100%">
                                                                        <div class="vote-icon" data-toggle="tooltip" title="<?= ($demande->typedemandevehicule_id == 2)?'Mission programmée':'Mission inopinée'; ?>" >
                                                                            <i class="fa fa-car <?= ($demande->typedemandevehicule_id == 2)?'text-danger':''  ?>"> </i>
                                                                        </div>
                                                                    </div>
                                                                    <span class="vote-title"><u class="text-info">#<?= $demande->ticket ?></u>  // <?= $demande->objet ?></span>
                                                                    <span><?= $demande->comment ?></span><br>
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
                                                                     <i class="fa fa-close text-red" data-toggle="tooltip" title="Demande annulée pour '<?= $demande->refus_comment ?>' "> </i>
                                                                 <?php }
                                                                 ?>
                                                             </div>
                                                             <?php if ($demande->etat_id == Home\ETAT::ENCOURS;) { ?>
                                                                En attente d'approbations
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
                </div>
            </div>


            <div class="col-md-3">
                <div class="sidebar-panel" style="width: 100%;">
                    <div>
                        <h4>Les responsables <span class="badge badge-info float-right"><?= start0(count($utilisateurs));  ?></span></h4>
                        <hr>
                        <?php foreach ($utilisateurs as $key => $user) { ?>
                            <div class="feed-element">
                                <a href="#" class="float-left">
                                    <img alt="image" class="rounded-circle" src="<?= $this->stockage("images", "utilisateurs", $utilisateur->image) ?>">
                                </a>
                                <div class="media-body">
                                    <span class="gras"><?= $user->name() ?></span>
                                    <br>
                                    <small class="text-muted">Dernière connexion, <?= depuis($user->last_connexion()) ?></small>
                                    <!-- TODO faire les last connexion -->
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include($this->rootPath("composants/assets/modals/modal-demandevehicule.php")); ?> 

    <?php include($this->rootPath("webapp/direction/elements/templates/footer.php")); ?>


</div>

</div>


</body>
</html>
