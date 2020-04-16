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
                    <h2 class="text-uppercase">Equipements & Accessoires</h2>
                    <button data-toggle="modal" data-target="#modal-equipement" class="btn btn-success dim btn-xs"><i class="fa fa-plus"></i> Nouvel Equipement</button>
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
                                        <span> Tous les équipements </span>
                                        <h2 class="font-bold"><?= start0(count(Home\EQUIPEMENT::getAll()))  ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget style1 red-bg">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <span> En rupture de stock</span>
                                        <h2 class="font-bold"><?php //start0(count(Home\DEMANDEVEHICULE::valideesCeMois()))  ?> / <?php //start0(count(Home\DEMANDEVEHICULE::annuleesCeMois()))  ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content" id="autos">
                <div class="ibox" >
                    <div class="ibox-content" style="min-height: 400px;">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs" role="tablist">
                                <?php foreach ($types as $key => $type) {
                                    $type->fourni("equipement");
                                    ?>
                                    <li class=""><a class="nav-link" data-toggle="tab" href="#parc<?= $type->getId() ?>"> <?= $type->name ?> &nbsp;&nbsp;&nbsp;<span class="label bg-aqua"><?= count($type->equipements) ?></span></a></li>
                                <?php } ?>
                            </ul>
                            <div class="tab-content" id="parcs">
                                <br>
                                <?php foreach ($types as $key => $type) { ?>
                                    <div role="tabpanel" id="parc<?= $type->getId() ?>" class="tab-pane">
                                        <div class="row">
                                            <?php foreach ($type->equipements as $key => $equip) {
                                                $equip->actualise(); ?>
                                                <div class="col-sm-4 col-md-3">
                                                     <div class="ibox-content mp5 border">
                                                            <div class="row" >
                                                                <div class="col-3">
                                                                    <img style="height: 45px; width: 45px;" src="<?= $this->stockage("images", "equipements", $equip->image) ?>" alt="image">
                                                                </div>
                                                                <div class="col-9">
                                                                    <h4 class="mp0"><?= $equip->name() ?></h4>
                                                                    <small><?= $equip->typeequipement->name() ?></small>
                                                                </div>
                                                            </div>
                                                            <hr class="mp0"><br>
                                                            <div class="text-center">
                                                                <div class="btn-group">
                                                                    <a href=""  class="btn btn-xs btn-white"><i class="fa fa-cubes"></i> Stock</a>
                                                                    <a href=""  class="btn btn-xs btn-white"><i class="fa fa-pencil"></i> Modifier</a>
                                                                    <a href=""  class="btn btn-xs btn-white"><i class="fa fa-close text-red"></i> Supprimer </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>


            <div class="modal inmodal fade" id="modal-stock">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Changer le stock</h4>
                        <small class="font-bold">Renseigner ces champs pour enregistrer l'assurance</small>
                    </div>
                    <form method="POST" class="formShamman" classname="equipement">
                        <div class="modal-body">
                            <p>Stock de l'équipement </p>
                            <div class="m-r-md inline">
                                <input type="text" value="50" name="stock" class="dial m-r" data-fgColor="#1AB394" data-width="200" data-height="200"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary">Changer</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


    </div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


</body>

</html>
