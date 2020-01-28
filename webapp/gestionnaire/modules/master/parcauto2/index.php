
<?php require("../../webapp/administration/assets/includes/head.php") ?>

<body>

    <?php require("../../webapp/administration/assets/includes/preloader.php") ?>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php require("../../webapp/administration/assets/includes/header.php") ?>

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php require("../../webapp/administration/assets/includes/sidebar.php") ?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content"><br>

                           <div class="row">
                               <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-yellow text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Effectif du parc automobile</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\VEHICULE::parcauto())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-car f-50 text-c-yellow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-blue text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Catégories de véhicules</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\TYPEVEHICULE::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-clone f-50 text-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Véhicule libre Opérationnel</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\VEHICULE::in())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-check f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-pink text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Mission/ Reparartion/ indisponible</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\VEHICULE::parcauto()) - count(Home\VEHICULE::in())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-ban f-50 text-c-pink"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div >
                            <button class="btn bg-green btn-sm pull-left" data-toggle="modal" data-target="#modal-vehicule"><i class="fa fa-plus"></i> Ajouter Nouveau vehicule</button>

                            <a class="btn bg-green pull-right" href="<?= $this->url("administration", "master", "parcauto") ?>"><i class="fa fa-gear"></i> Afficher par Type</a>
                            <a class="btn bg-aqua pull-right" href="<?= $this->url("administration", "master", "parcauto1") ?>"><i class="fa fa-clone"></i> Afficher par Fabriquant</a>
                        </div><br><br>

                        <div class="">
                          <div class="card">
                            <div class="card-block">
                                <ul class="nav nav-tabs " role="tablist">
                                    <?php foreach ($types as $key => $type) { ?>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#parc<?= $type->getId() ?>" role="tab"><?= $type->name ?> <span class="badge bg-aqua"><?= count($type->vehicules) ?></span></a>
                                            <div class="slide"></div>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content card-block">
                                    <?php foreach ($types as $key => $type) { ?>
                                        <div class="tab-pane " id="parc<?= $type->getId() ?>" role="tabpanel">
                                            <div class="row">
                                                <?php foreach ($type->vehicules as $key => $vehicule) {
                                                    $vehicule->actualise();
                                                    $vehicule->etat(); ?>
                                                      <div class="col-md-3">
                                                        <a href="<?= $this->url("administration", 'master', "vehicule", $vehicule->getId()) ?>">
                                                            <div class="card cursor border" style="padding: 2%">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <img class="img-thumbnail" src="<?= $this->image("vehicules", $vehicule->image) ?>" style="width: 80px"> 
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <h3 class="mp0 subtitle"><?= $vehicule->immatriculation ?></h3>
                                                                        <div class="">
                                                                            <span class="m-b-0"><?= $vehicule->marque->name ?> // <?= $vehicule->couleur ?></span><br>
                                                                            <span class="text-muted m-b-0  mp0"><?= $vehicule->modele ?></span>
                                                                            <p class="m-b-0 mp0"><label class="label label-<?= $vehicule->etatvehicule->class ?>"><?= $vehicule->etatvehicule->name ?></label></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
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
            </div>
        </div>
    </div>
</div>
</div>


<?php require("../../webapp/administration/assets/includes/footer.php") ?>

<?php require("../../webapp/home/elements/modals/modal-vehicule.php") ?>

</body>

</html>
