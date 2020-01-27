
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
                                                <p class="m-b-5">Total des missions</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\MISSION::getAll())) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-plane f-50 text-c-yellow"></i>
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
                                                <p class="m-b-5">Missions en cours</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\MISSION::findBy(["etat_id ="=>0]))) ?></h4>
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
                                                <p class="m-b-5">Véhicules impliqués</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\VEHICULE_MISSION::findBy(["etat_id ="=>0]))) ?></h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-car f-50 text-c-pink"></i>
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
                                                <p class="m-b-5">Dans ce mois</p>
                                                <h4 class="m-b-0"><?= start0(count(Home\MISSION::findBy(["started >= "=>date("Y-m")."-01"]))) ?></h4>
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
                                            <a class="nav-link active" data-toggle="tab" href="#encours" role="tab">Toutes les missions en cours <span class="badge bg-orange"><?= start0(count($encours)) ?></span></a>
                                            <div class="slide"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#autres" role="tab">Les autres missions <span class="badge bg-green"><?= start0(count($autres)) ?></span></a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content card-block">
                                        <div class="tab-pane active" id="encours" role="tabpanel">
                                            <table class="table table-hover table-bordered table-striped">
                                                <thead class="bg-orange">
                                                    <tr>
                                                        <th>Désignation</th>
                                                        <th>Période</th>
                                                        <th>Lieu</th>
                                                        <th>Exigence</th>
                                                        <th>Etat</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($encours as $key => $mission) {
                                                        $mission->actualise(); ?>
                                                        <tr>
                                                            <td>
                                                                <span class="gras text-uppercase"><?= $mission->demandevehicule->typedemandevehicule->name ?></span><br>
                                                                <span class="italic"><?= $mission->objet ?></span>
                                                            </td>
                                                            <td>
                                                                <span>Du <?= datecourt($mission->started) ?></span><br>
                                                                <span>au <?= datecourt($mission->finished) ?></span>
                                                            </td>
                                                            <td><?= $mission->lieu ?></td>
                                                            <td>
                                                                <span><?= start0($mission->demandevehicule->nb_vehicule) ?> Véhicule(s)</span><br>
                                                                <span><?= start0($mission->demandevehicule->nb_chauffeur) ?> chauffeurs(2)</span>
                                                            </td>
                                                            <td><label class="label label-<?= $mission->etat->class ?>"><?= $mission->etat->name ?></label></td>
                                                            <td>
                                                                <?php
                                                                $mission->fourni("chauffeur_mission");
                                                                foreach ($mission->chauffeur_missions as $key => $chmis) {
                                                                    $chmis->actualise() ?>
                                                                    <a onclick="session('chauffeur', <?= $chmis->chauffeur_id ?>)" href="<?= $this->url("administration", "fiches", "fichemission", $mission->get_id()) ?>" class="btn" style="margin-bottom: 1%;"><i class="fa fa-eye text-blue"></i> FM de <?= coupeMot($chmis->chauffeur->name." ".$chmis->chauffeur->lastname ,2) ?></a><br>
                                                                <?php }

                                                                foreach ($mission->chauffeur_missions as $key => $chmis) {
                                                                    $chmis->actualise() ?>
                                                                    <a onclick="session('chauffeur', <?= $chmis->chauffeur_id ?>)" href="<?= $this->url("administration", "fiches", "ordremission", $mission->get_id()) ?>" class="btn btn"><i class="fa fa-eye text-red"> OM de <?= coupeMot($chmis->chauffeur->name." ".$chmis->chauffeur->lastname ,2) ?></i></a>
                                                                <?php } ?>

                                                            </td>
                                                            <td><button class="btn bg-green" onclick="terminer(<?= $mission->get_id() ?>)"><i class="fa fa-check"></i> Terminée</button></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="tab-pane " id="autres" role="tabpanel">
                                           <table class="table table-hover table-bordered table-striped">
                                            <thead class="bg-green">
                                                <tr>
                                                    <th>Désignation</th>
                                                    <th>Période</th>
                                                    <th>Lieu</th>
                                                    <th>Exigence</th>
                                                    <th>Etat</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($autres as $key => $mission) {
                                                    $mission->actualise(); ?>
                                                    <tr>
                                                        <td>
                                                            <span class="gras text-uppercase"><?= $mission->demandevehicule->typedemandevehicule->name ?></span><br>
                                                            <span class="italic"><?= $mission->objet ?></span>
                                                        </td>
                                                        <td>
                                                            <span>Du <?= datecourt($mission->started) ?></span><br>
                                                            <span>au <?= datecourt($mission->finished) ?></span>
                                                        </td>
                                                        <td><?= $mission->lieu ?></td>
                                                        <td>
                                                            <span><?= start0($mission->demandevehicule->nb_vehicule) ?> Véhicule(s)</span><br>
                                                            <span><?= start0($mission->demandevehicule->nb_chauffeur) ?> chauffeurs(2)</span>
                                                        </td>
                                                        <td><label class="label label-<?= $mission->etat->class ?>"><?= $mission->etat->name ?></label></td>
                                                        <td>
                                                            <?php
                                                            $mission->fourni("chauffeur_mission");
                                                            foreach ($mission->chauffeur_missions as $key => $chmis) {
                                                                $chmis->actualise() ?>
                                                                <a onclick="session('chauffeur', <?= $chmis->chauffeur_id ?>)" href="<?= $this->url("administration", "fiches", "fichemission", $mission->get_id()) ?>" class="btn" style="margin-bottom: 1%;"><i class="fa fa-eye text-blue"></i> FM de <?= coupeMot($chmis->chauffeur->name." ".$chmis->chauffeur->lastname ,2) ?></a><br>
                                                            <?php }

                                                            foreach ($mission->chauffeur_missions as $key => $chmis) {
                                                                $chmis->actualise() ?>
                                                                <a onclick="session('chauffeur', <?= $chmis->chauffeur_id ?>)" href="<?= $this->url("administration", "fiches", "ordremission", $mission->get_id()) ?>" class="btn btn"><i class="fa fa-eye text-red"> OM de <?= coupeMot($chmis->chauffeur->name." ".$chmis->chauffeur->lastname ,2) ?></i></a>
                                                            <?php } ?>

                                                        </td>
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


<?php require("../../webapp/administration/assets/includes/footer.php") ?>

</body>

</html>
