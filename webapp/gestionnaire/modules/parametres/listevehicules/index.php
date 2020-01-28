
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

                        <div class="">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row container">
                                        <button data-toggle="modal" data-target="#modal-vehicule" class="btn btn-sm btn-grd-success btn-round float-right btn_modal"><i class="fa fa-plus"></i> Ajouter un nouveau véhicule</button>
                                    </div><br>

                                    <table class="table table-hover table-striped liste">
                                        <thead class="bg-green">
                                            <tr>
                                                <th colspan="2">Désignation</th>
                                                <th>Type</th>
                                                <th>Immatriculation</th>
                                                <th>Attribut</th>
                                                <th>Energie/Puissance</th>
                                                <th>Mise en circl.</th>
                                                <th>Sortie le</th>
                                                <th>Kilométrage</th>
                                                <th>Etat</th>
                                                <th colspan="2"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($vehicules as $key => $vehicule) {
                                                $vehicule->actualise(); ?>
                                                <tr>
                                                    <td><img style="width: 50px;" src="<?= $this->image("vehicules", $vehicule->image) ?>"></td>
                                                    <td>
                                                        <a href="<?= $this->url("administration", "master", "vehicule", $vehicule->getId()) ?>">
                                                            <span><?= $vehicule->marque->name ?></span><br>
                                                            <span><?= $vehicule->modele ?></span>
                                                        </a>
                                                    </td>
                                                    <td><?= $vehicule->typevehicule->name ?></td>
                                                    <td>
                                                        <span><?= $vehicule->immatriculation ?></span><br>
                                                        <span><?= $vehicule->couleur ?></span>
                                                    </td>
                                                    <td>
                                                        <span><?= $vehicule->nb_place ?> places</span><br>
                                                        <span><?= $vehicule->nb_porte ?> portes</span>
                                                    </td>
                                                    <td>
                                                        <span><?= $vehicule->energie->name ?></span><br>
                                                        <span><?= $vehicule->puissance ?> Chevaux</span>
                                                    </td>
                                                    <td><?= datecourt($vehicule->date_mise_circulation) ?></td>
                                                    <td><?= datecourt($vehicule->date_sortie) ?></td>
                                                    <td><?= $vehicule->kilometrage ?> Km</td>
                                                    <td><?= $vehicule->etat() ?></td>
                                                    <td class="cursor" data-toggle="modal" data-target="#modal-vehicule" onclick="modification('vehicule', <?= $vehicule->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                    <td class="cursor" onclick="suppression_with_password('vehicule', <?= $vehicule->getId() ?>)"><i class="fa fa-close text-red"></i></td>
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





<?php require("../../webapp/home/elements/modals/modal-vehicule.php") ?>




<?php require("../../webapp/administration/assets/includes/footer.php") ?>

</body>

</html>
