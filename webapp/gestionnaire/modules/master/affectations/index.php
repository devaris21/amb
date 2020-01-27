
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
                                                <p class="m-b-5">Affectations</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\AFFECTATION::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-car f-50 text-c-yellow"></i>
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
                                                <p class="m-b-5">En cours</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\AFFECTATION::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-refresh f-50 text-c-green"></i>
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
                                                <p class="m-b-5">Nbr de Cession</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\CESSION::findBy())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-check f-50 text-c-pink"></i>
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
                                                <p class="m-b-5">Cette Année</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\AFFECTATION::findBy(["started >= "=>date("Y")."-01-01"]))) ?></</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-calendar f-50 text-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="">
                            <div class="card">
                                <div class="card-block">
                                    <ul class="nav nav-tabs " role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#employes" role="tab">Toutes les affectations</a>
                                            <div class="slide"></div>
                                        </li>                                        
                                    </ul>

                                    <div class="tab-content card-block">

                                        <div class="tab-pane active" id="employes" role="tabpanel">
                                            <div class="row">
                                                <table class="table table-hover table-striped table-bordered">
                                                    <thead class="bg-green">
                                                        <tr>
                                                            <th>Bénéfiaire</th>
                                                            <th colspan="2">Véhicule concerné</th>
                                                            <th>Date d'affectation</th>
                                                            <th>Durée d'affectation</th>
                                                            <th>Etat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($affectations as $key => $affectation) {
                                                            $affectation->actualise(); $affectation->etat() ?>
                                                            <tr>
                                                                <td class="gras"><?= $affectation->name() ?></td>
                                                                <td><a href="<?= $this->url("administration", "master", "vehicule", $affectation->vehicule->get_id()) ?>"><img style="height: 50px;" src="<?= $this->image("vehicules", $affectation->vehicule->image) ?>" alt="placeholder+image"></a></td>
                                                                <td>
                                                                    <span class="text-uppercase"><a href="<?= $this->url("administration", "master", "vehicule", $affectation->vehicule->get_id()) ?>"><?= $affectation->vehicule->modele ?></span></a><br>
                                                                    <span><?= $affectation->vehicule->marque->name ?> // <?= $affectation->vehicule->couleur ?></span>
                                                                </td>
                                                                <td><?= datecourt($affectation->created) ?></td>
                                                                <td>
                                                                    <span>Du <?= datecourt($affectation->started) ?></span><br>
                                                                    <span>au <?= datecourt($affectation->finished) ?></span>
                                                                </td>
                                                                <td><label class="label label-<?= $affectation->etat->class ?>"><?= $affectation->etat->name ?></label></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
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
    </div>
</div>


<?php require("../../webapp/administration/assets/includes/footer.php") ?>

</body>

</html>
