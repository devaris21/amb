
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
                                                <p class="m-b-5">Total des demandes</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\DEMANDEVEHICULE::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-car f-50 text-c-yellow"></i>
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
                                                <p class="m-b-5">Demandes en cours</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\DEMANDEVEHICULE::findBy(["etat_id="=>0]))) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-check f-50 text-c-pink"></i>
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
                                                <p class="m-b-5">Demandes pour missions</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\DEMANDEVEHICULE::findBy(["typedemandevehicule_id ="=>1, "typedemandevehicule_id ="=>2], [], [], -1, "OR"))) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-refresh f-50 text-c-green"></i>
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
                                                <p class="m-b-5">Demandes de ce mois</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\DEMANDEVEHICULE::findBy(["created >="=>date("Y-m")."-01"]))) ?></h4>
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
                                            <a class="nav-link active" data-toggle="tab" href="#encours" role="tab">Les demandes en cours</a>
                                            <div class="slide"></div>
                                        </li>     

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#autres" role="tab">autres demandes</a>
                                            <div class="slide"></div>
                                        </li>                                     
                                    </ul>

                                    <div class="tab-content card-block">

                                        <div class="tab-pane active" id="encours" role="tabpanel">
                                            <div class="row">
                                             <table class="table table-hover table-bordered table-striped">
                                                <thead class="bg-green">
                                                    <tr>
                                                        <th>Type de Demande</th>
                                                        <th>Auteur</th>
                                                        <th>Les besions</th>
                                                        <th>Durée</th>
                                                        <th colspan="2">Etat</th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($demandes as $key => $demande) {
                                                        $demande->actualise(); ?>
                                                        <tr>
                                                            <td>
                                                                <span class="text-uppercase gras"><?= $demande->typedemandevehicule->name ?></span><br>
                                                                <span><?= $demande->objet ?></span>
                                                            </td>
                                                            <td><?= $demande->auteur() ?></td>
                                                            <td>
                                                                <span><?= $demande->nb_vehicule ?> Véhicule(s)</span><br>
                                                                <span><?= $demande->nb_chauffeur ?> Chauffeur(s)</span>
                                                            </td>
                                                            <td>
                                                                <span>Du <?= datelong($demande->started) ?></span><br>
                                                                <span>Au <?= datelong($demande->finished) ?></span>
                                                            </td>
                                                            <td><label class="label label-<?= $demande->etat->class ?>"><?= $demande->etat->name ?></label></td>
                                                            <td><?php if($demande->etats == 2 && $demande->etat_id ==0){ ?>
                                                                <i class="fa fa-circle text-red"></i>
                                                                <?php } ?></td>
                                                                <td> <a class="btn bg-green" href="<?= $this->url("administration", "fiches", "demandevehicule", $demande->get_id()) ?>" ><i class="fa fa-eye"></i></a></td>
                                                            </tr>
                                                        <?php } ?>                                               
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="tab-pane" id="autres" role="tabpanel">
                                            <div class="row">
                                               <table class="table table-hover table-bordered table-striped">
                                                <thead class="bg-orange">
                                                    <tr>
                                                        <th>Type de Demande</th>
                                                        <th>Auteur</th>
                                                        <th>Les besions</th>
                                                        <th>Durée</th>
                                                        <th>Lieu de la mission</th>
                                                        <th>Etat</th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($autres as $key => $demande) {
                                                        $demande->actualise(); ?>
                                                        <tr>
                                                            <td>
                                                                <span class="text-uppercase gras"><?= $demande->typedemandevehicule->name ?></span><br>
                                                                <span><?= $demande->objet ?></span>
                                                            </td>
                                                            <td><?= $demande->auteur() ?></td>
                                                            <td>
                                                                <span><?= $demande->nb_vehicule ?> Véhicule(s)</span><br>
                                                                <span><?= $demande->nb_chauffeur ?> Chauffeur(s)</span>
                                                            </td>
                                                            <td>
                                                                <span>Du <?= datelong($demande->started) ?></span><br>
                                                                <span>Au <?= datelong($demande->finished) ?></span>
                                                            </td>
                                                            <td><?= $demande->lieu ?></td>
                                                            <td><label class="label label-<?= $demande->etat->class ?>"><?= $demande->etat->name ?></label></td>
                                                            <td> <a class="btn bg-orange" href="<?= $this->url("administration", "fiches", "demandevehicule", $demande->get_id()) ?>" ><i class="fa fa-eye"></i></a></td>
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
