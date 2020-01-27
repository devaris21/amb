
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

                                <div class="row">
                                    <!-- task, page, download counter  start -->
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <h4 class="text-c-yellow f-w-600"><?= start0(count(Home\VEHICULE::artci())) ?></h4>
                                                        <h6 class="text-muted m-b-0">Véhicules ARTCI</h6>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <i class="fa fa-car f-28"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-c-yellow">
                                                <div class="row align-items-center">
                                                    <div class="col-9">
                                                        <p class="text-white m-b-0"></p>
                                                    </div>
                                                    <div class="col-3 text-right">
                                                        <i class="feather icon-trending-up text-white f-16"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <h4 class="text-c-green f-w-600"><?= start0(count(Home\EMPLOYE::getAll())) ?></h4>
                                                        <h6 class="text-muted m-b-0">Gestionnaires</h6>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <i class="fa fa-male f-28"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-c-green">
                                                <div class="row align-items-center">
                                                    <div class="col-9">
                                                        <p class="text-white m-b-0"></p>
                                                    </div>
                                                    <div class="col-3 text-right">
                                                        <i class="feather icon-trending-up text-white f-16"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <h4 class="text-c-pink f-w-600"><?= start0(count(Home\DEPARTEMENT::getAll())) ?></h4>
                                                        <h6 class="text-muted m-b-0">Directions</h6>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <i class="fa fa-home f-28"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-c-pink">
                                                <div class="row align-items-center">
                                                    <div class="col-9">
                                                        <p class="text-white m-b-0"></p>
                                                    </div>
                                                    <div class="col-3 text-right">
                                                        <i class="feather icon-trending-up text-white f-16"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <h4 class="text-c-blue f-w-600"><?= start0(count(Home\PRESTATAIRE::getAll())) ?></h4>
                                                        <h6 class="text-muted m-b-0">Prestataires</h6>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <i class="fa fa-handshake-o f-28"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-c-blue">
                                                <div class="row align-items-center">
                                                    <div class="col-9">
                                                        <p class="text-white m-b-0"></p>
                                                    </div>
                                                    <div class="col-3 text-right">
                                                        <i class="feather icon-trending-up text-white f-16"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- task, page, download counter  end -->
                                </div>

                                
                                <div class="row">

                                    <!--  sale analytics start -->
                                    <div class="col-xl-8 col-md-12">
                                        <div class="card block">
                                            <div class="card-block text-center">
                                               <div class="row">
                                                   <div class="col-sm-6 border-right border-bottom">
                                                    <h2 class="subtitle mp5 text-uppercase text-orange">les véhicules</h2>
                                                    <table class="table text-left">
                                                        <tbody>
                                                            <tr>
                                                                <td>Effectif du parc</td>
                                                                <td><?= start0(count(Home\VEHICULE::parcauto())) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Actuellement dans le parc</td>
                                                                <td><?= start0(count(Home\VEHICULE::in())) ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="">
                                                        <a href="<?= $this->url("administration", "master", "parcauto") ?>" class="label label-primary cursor pull-right"><i class="fa fa-plus"></i> Voir plus</a>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 border-left border-bottom">
                                                    <h2 class="subtitle mp5 text-uppercase text-green">les demandes</h2>
                                                    <table class="table text-left">
                                                        <tbody>
                                                            <tr>
                                                                <td>demandes de véhicules en cours</td>
                                                                <td><?= start0(count(Home\DEMANDEVEHICULE::encours())) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Demandes d'entretien en cours</td>
                                                                <td><?= start0(count(Home\DEMANDEENTRETIEN::encours())) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total Demande de ce Mois</td>
                                                                <td><?= start0(count(Home\DEMANDEVEHICULE::findBy(["created >="=>date("Y-m")."-01"])) + count(Home\DEMANDEENTRETIEN::findBy(["created >="=>date("Y-m"."-01")]))) ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="">
                                                        <a href="<?= $this->url("administration", "master", "demandevehicules") ?>" class="label label-primary cursor pull-right"><i class="fa fa-plus"></i> Voir plus</a>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 border-right border-bottom">
                                                    <h2 class="subtitle mp5 text-uppercase text-blue">locations / prèts</h2>
                                                    <table class="table text-left">
                                                        <tbody>
                                                            <tr>
                                                                <td>En location chez nous</td>
                                                                <td><?= start0(count(Home\VEHICULE::loues())) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>En prêt</td>
                                                                <td><?= start0(count(Home\VEHICULE::pretes())) ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="">
                                                        <a href="<?= $this->url("administration", "master", "locations") ?>" class="label label-primary cursor pull-right"><i class="fa fa-plus"></i> Voir plus</a>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 border-left">
                                                    <h2 class="subtitle mp5 text-uppercase text-navy">autres</h2>
                                                    <table class="table text-left">
                                                        <tbody>
                                                            <tr>
                                                                <td>Total chauffeurs</td>
                                                                <td><?= start0(count(Home\CHAUFFEUR::getAll())) ?></td>
                                                                <td><a href="<?= $this->url("administration", "exterieurs", "chauffeurs") ?>" class="label label-primary cursor pull-right"><i class="fa fa-plus"></i> Voir plus</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total utilisateurs</td>
                                                                <td><?= start0(count(Home\UTILISATEUR::getAll())) ?></td>
                                                                <td><a href="<?= $this->url("administration", "exterieurs", "utilisateurs") ?>" class="label label-primary cursor pull-right"><i class="fa fa-plus"></i> Voir plus</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card feed-card bg-primary">
                                        <div class="card-header text-center">
                                            <h5 class="mp5 text-white">Nouvelles demandes</h5><br>
                                            <b class="text-center mp5" style="font-size: 45px;"><?= start0(count(array_merge($demvehicules, $entretiens))) ?></b>
                                        </div>
                                      <div class="scroll" style="height: 300px; overflow-y: scroll;">
                                            <div class="card-block">
                                          <?php foreach ($demvehicules as $key => $item) { ?>
                                            <div class="row m-b-30">
                                                <div class="col-auto p-r-0">
                                                    <i class="feather icon-bell bg-simple-c-blue feed-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <p class="m-b-5">Vous avez reçu une nouvelle de demande vehicule de la part de <?= $item->auteur() ?><a href="<?= $this->url("administration", "fiches", "demandevehicule", $item->get_id()) ?>"><span class="label label-success f-right f-13 cursor" onclick="etat()"><i class="fa fa-eye"></i> Voir</span></a></p>
                                                </div>
                                            </div>
                                        <?php } ?>

                                        <?php foreach ($entretiens as $key => $item) { ?>
                                            <div class="row m-b-30">
                                                <div class="col-auto p-r-0">
                                                    <i class="feather icon-bell bg-simple-c-blue feed-icon"></i>
                                                </div>
                                                 <div class="col">
                                                    <p class="m-b-5">Vous avez reçu une nouvelle de demande d'entretien de vehicule de la part de <?= $item->auteur() ?><a href="<?= $this->url("administration", "fiches", "demandeentretien", $item->get_id()) ?>"><span class="label label-warning f-right f-13 cursor" onclick="etat()"><i class="fa fa-eye"></i> Voir</span></a></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                      </div>
                                </div>
                            </div>
                            <!--  sale analytics end -->

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

<?php require("../../webapp/home/elements/modals/modal-vehicule.php") ?>
<?php require("../../webapp/home/elements/modals/modal_sinistres.php") ?>

</body>

</html>
