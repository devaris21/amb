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
                <h2 class="text-uppercase">Le personnel roulant</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-7 gras text-capitalize">Afficher tous le personnel</div>
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
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-4">
                    <div class="widget style1 blue-bg">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-cloud fa-3x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <span> Total personnel </span>
                                <h2 class="font-bold"><?= $a = start0(count(Home\CHAUFFEUR::getAll()))  ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-cloud fa-3x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <span> Disponibles </span>
                                <h2 class="font-bold"><?= $b = start0(count(Home\CHAUFFEUR::open()))  ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="widget style1 red-bg">
                        <div class="row">
                            <div class="col-12 text-right">
                                <span> En mission</span>
                                <h2 class="font-bold"><?= start0($a - $b)  ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-8">
                <div class="ibox">
                    <div class="ibox-content">
                        <button class="btn btn-xs dim btn-success pull-right" data-toggle="modal" data-target="#modal-chauffeur"><i class="fa fa-plus"></i> Nouveau chauffeur</button>
                        <div class="table-responsive">
                            <table class="table table-hover table-chauffeurs">
                                <tbody>
                                    <?php foreach ($chauffeurs as $key => $chauffeur) {
                                        $chauffeur->actualise() ?>
                                        <tr>
                                            <td class=""><img style="width: 32px" src="<?= $this->stockage("images", "chauffeurs", $chauffeur->image) ?>"></td>
                                            <td class="text-uppercase">
                                                <small>Matricule</small><br>
                                                <?= $chauffeur->matricule ?>
                                            </td>
                                            <td>
                                                <span class="gras"><?= $chauffeur->name() ?></span><br>
                                                <small><?= $chauffeur->sexe->name ?> // <?= $chauffeur->nationalite ?></small>
                                            </td>
                                            <td class="contact-type"></td>
                                            <td>
                                                <?= $chauffeur->contact ?><br>
                                                <?= $chauffeur->email ?>
                                            </td>
                                            <td><button class="btn btn-white btn-sm" onclick="afficherChauffeur(<?= $chauffeur->getId(); ?>)"><i class="fa fa-eye"></i> Afficher</button></td>
                                        </tr>  
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox affichage">
                    <!-- rempli en Ajax -->
                </div>
            </div>
        </div>
    </div>


    <?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>


</div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


</body>

</html>
