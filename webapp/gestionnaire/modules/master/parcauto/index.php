<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

            <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  


     <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Votre Parc Automobile</h2>
                <ol class="breadcrumb">
                    <li class="text-center">
                        <span>Afficher par ...</span><br>
                        <div class="btn-group">
                            <a href="<?= $this->url("gestionnaire", "master", "parcauto", "parcauto") ?>" class="btn btn-white btn-xs <?= ($this->getId() == "parcauto")?"active":""?>"><i class="fa fa-comments"></i>  Type d'auto</a>
                            <a href="<?= $this->url("gestionnaire", "master", "parcauto", "categorie") ?>" class="btn btn-white btn-xs <?= ($this->getId() == "categorie")?"active":""?>"><i class="fa fa-thumbs-up"></i> Groupe</a>
                            <a href="<?= $this->url("gestionnaire", "master", "parcauto", "fabriquant") ?>" class="btn btn-white btn-xs <?= ($this->getId() == "fabriquant")?"active":""?>"><i class="fa fa-share"></i> Fabriquant</a>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8 cards">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ibox text-blue">
                            <div class="ibox-title">
                                <h5 class="text-uppercase">Au total</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins">40 886,200</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ibox text-green">
                            <div class="ibox-title">
                                <h5 class="text-uppercase">Libres</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins">275,800</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ibox text-red">
                            <div class="ibox-title">
                                <h5 class="text-uppercase">En mission</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins">106,120</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content " id="autos">
            <div class="tabs-container">
                <ul class="nav nav-tabs text-uppercase" role="tablist">
                    <?php foreach ($types as $key => $type) { ?>
                        <li><a class="nav-link" data-toggle="tab" href="#parc<?= $type->getId() ?>"> <?= $type->name ?> &nbsp;&nbsp;&nbsp;<span class="label bg-aqua"><?= count($type->vehicules) ?></span></a></li>
                    <?php } ?>
                    <button data-toggle="modal" data-target="#modal-vehicule" class="btn btn-outline btn-info cursor dim" type="button"><i data-toggle="tooltip" title="Ajouter un néveau véhicule" class="fa fa-plus"></i> </button>
                </ul>
                <div class="tab-content" id="parcs">
                    <br>
                    <?php foreach ($types as $key => $type) { ?>
                        <div role="tabpanel" id="parc<?= $type->getId() ?>" class="tab-pane">
                            <div class="row">
                                <?php foreach ($type->vehicules as $key => $vehicule) {
                                    $vehicule->actualise();
                                    $vehicule->etat(); ?>
                                    <div class="col-sm-4 col-md-3">
                                        <div class="contact-box">
                                            <a class="row" href="<?= $this->url("gestionnaire", "master", "vehicule", $vehicule->getId()) ?>">
                                                <div class="col-4">
                                                    <div class="text-center">
                                                        <img alt="image" style="height: 55px;" class="m-t-xs" src="<?= $this->stockage("images", "vehicules", $vehicule->image) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h3 style="margin: 0"><strong><?= $vehicule->immatriculation ?></strong></h3>
                                                    <address>
                                                        <strong><?= $vehicule->marque->name ?></strong><br>
                                                        <?= $vehicule->modele ?> <br>
                                                        <small class="label label-success float-right">Monthly</small>
                                                    </address>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

            <?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>

        </div>
    </div>


    <?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


</body>

</html>
