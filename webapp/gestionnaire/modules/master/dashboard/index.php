
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
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">

                            <div class="page-body">
<!-- 
                                <div class="card bg-orange" style="margin-top: -3%">
                                    <div class="card-header">
                                        <h2 class="subtitle mp0 text-uppercase">tableau de bord</h2>
                                        <h4>Bienvenue dans la gestion de votre parc Auto</h4>
                                    </div>
                                </div>
                                * -->

                                <div class="text-center">
                                    <h1 class="title" style="font-size: 30px;"><i class="ion-model-s"></i> Bienvenue dans <span class="text-orange">votre espace de gestion</span> <i class="ion-model-s"></i></h1>
                                    <h2 class="subtitle">Accès aux fonctions rapides </h2>
                                </div>


                                <div class="row">
                                    <!-- customar project  start -->
                                    <div class="col-xl-3 col-md-6">
                                        <a href="<?= $this->url("administration", "master", "parcauto") ?>">
                                            <div class="card border">
                                                <div class="card-block">
                                                    <div class="row align-items-center m-l-0">
                                                        <div class="col-auto">
                                                            <i class="ion-model-s f-30 text-c-lite-green"></i>
                                                        </div>
                                                        <div class="col-auto">
                                                            <h6 class="text-muted m-b-10">Véhicules</h6>
                                                            <h2 class="m-b-0"><?= start0(count(Home\VEHICULE::parcauto())) ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <a href="<?= $this->url("administration", "master", "missions") ?>">
                                            <div class="card border">
                                                <div class="card-block">
                                                    <div class="row align-items-center m-l-0">
                                                        <div class="col-auto">
                                                            <i class="fa fa-plane f-30 text-c-green"></i>
                                                        </div>
                                                        <div class="col-auto">
                                                            <h6 class="text-muted m-b-10">Missions en cours</h6>
                                                            <h2 class="m-b-0"><?= start0(count(Home\MISSION::encours())) ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <a href="<?= $this->url("administration", "exterieurs", "chauffeurs") ?>">
                                            <div class="card border">
                                                <div class="card-block">
                                                    <div class="row align-items-center m-l-0">
                                                        <div class="col-auto">
                                                            <i class="feather icon-users f-30 text-c-pink"></i>
                                                        </div>
                                                        <div class="col-auto">
                                                            <h6 class="text-muted m-b-10">Les chauffeurs</h6>
                                                            <h2 class="m-b-0"><?= start0(count(Home\CHAUFFEUR::getAll())) ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <a href="<?= $this->url("administration", "exterieurs", "prestataires") ?>">
                                            <div class="card border">
                                                <div class="card-block">
                                                    <div class="row align-items-center m-l-0">
                                                        <div class="col-auto">
                                                            <i class="fa fa-handshake-o f-30 text-c-blue"></i>
                                                        </div>
                                                        <div class="col-auto">
                                                            <h6 class="text-muted m-b-10">Les prestataires</h6>
                                                            <h2 class="m-b-0"><?= start0(count(Home\PRESTATAIRE::getAll())) ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- statustic with progressbar  start -->
                                    <div class="col-md-4">
                                        <div class="card border statustic-progress-card">
                                            <div class="card-header">
                                                <h5>Véhicules du parc auto</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <a href="<?= $this->url("administration", "master", "parcauto") ?>" class="btn btn-success">
                                                            <i class="m-l-10 fa fa-eye"></i> Voir les véhicules
                                                        </a>
                                                    </div>
                                                    <div class="col text-right">
                                                        <h5 class=""><?= start0(count(Home\VEHICULE::in())) ?></h5>
                                                    </div>
                                                </div>
                                                <div class="progress m-t-15">
                                                    <div class="progress-bar bg-c-green" style="width:100%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border statustic-progress-card">
                                            <div class="card-header">
                                                <h5>Démandes d'entretiens en cours</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <a href="<?= $this->url("administration", "master", "demandeentretiens") ?>" class="btn btn-primary bg-c-lite-green"> 
                                                            <i class="m-l-10 fa fa-eye"></i> Voir les demandes
                                                        </a>
                                                    </div>
                                                    <div class="col text-right">
                                                        <h5 class=""><?= start0(count(Home\DEMANDEENTRETIEN::encours())) ?></h5>
                                                    </div>
                                                </div>
                                                <div class="progress m-t-15">
                                                    <div class="progress-bar bg-c-lite-green" style="width:100%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border statustic-progress-card">
                                            <div class="card-header">
                                                <h5>Demandes de véhicules</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <a href="<?= $this->url("administration", "master", "demandevehicules") ?>" class="btn btn-danger">
                                                            <i class="m-l-10 fa fa-eye"></i> Voir les demandes
                                                        </a>
                                                    </div>
                                                    <div class="col text-right">
                                                        <h5 class=""><?= start0(count(Home\DEMANDEVEHICULE::encours())) ?></h5>
                                                    </div>
                                                </div>
                                                <div class="progress m-t-15">
                                                    <div class="progress-bar bg-c-pink" style="width:100%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- statustic with progressbar  end -->


                                    <!-- customar project  end -->
                                </div>
                                <!-- task, page, download counter  end -->

                                <div class="text-center" style="bottom: 5px; left: 46%; height: 50px; position: fixed;">
                                   <!-- <h2 class="subtitle mp3" style="font-size: 15px;"><?= $tableau_jour[date("N")] ?> <?= datecourt(dateAjoute()) ?> - <?= date("H:i") ?></h2> -->
                                   <p>Gestion du Parc Automobile</p>
                               </div>

                           </div>
                       </div>

                       <div id="styleSelector">

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
