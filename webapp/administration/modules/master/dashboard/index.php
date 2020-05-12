<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/administration/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/administration/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/administration/elements/templates/header.php")); ?>  



          <div class="wrapper wrapper-content">
            <div class=" animated fadeInRightBig">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5 class="text-uppercase">Licence AMB</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins"><?= $compte->typecompte->name ?></h2>
                                <small>Version <?= $compte->version; ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Identifiant</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins"><?= $mycompte->identifiant ?></h2>
                                <small>Votre uniq-ID : <span class="font-weight-bold" style="font-size: 16px;"><?= $compte->id; ?></span></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Bugs et Suggestions</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins"><?= start0(count(Home\SUGGESTION::getAll()))  ?></h2>
                                <small>signalés</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Expiration</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins"><?= datecourt($mycompte->expired) ?></h2>
                                <div class="stat-percent font-bold "><?= start0(round(dateDiffe(Date("Y-m-d"), $mycompte->expired)))  ?> <i class="fa fa-calendar"></i></div>
                                <small>Nombre de jours restants</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Rapport d'utilisation de la plateforme</h5>
                                <div class="float-right">
                                    <div class="btn-group">
                                        <!-- <button type="button" class="btn btn-xs btn-white active">Today</button>
                                        <button type="button" class="btn btn-xs btn-white">Monthly</button>
                                        <button type="button" class="btn btn-xs btn-white">Annual</button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <ul class="stat-list">
                                            <li>
                                                <h2 class="no-margins"><?= $personnelle ?> Utilisateurs</h2>
                                                <small>Personnes actuellement connectées</small>
                                                <div class="stat-percent"><?= $nbre_connecte ?> <i class="fa fa-level-up text-navy"></i></div>
                                                <div class="progress progress-mini">
                                                    <div style="width: 48%;" class="progress-bar"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <h2 class="no-margins "><?= $flux_total ?> Flux Total(s)</h2>
                                                <small>Flux journalier de données</small>
                                                <div class="stat-percent"><?= $flux_jour ?> <i class="fa fa-level-down text-navy"></i></div>
                                                <div class="progress progress-mini">
                                                    <div style="width: 60%;" class="progress-bar"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <h2 class="no-margins ">9,180</h2>
                                                <small>Monthly income from orders</small>
                                                <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                                <div class="progress progress-mini">
                                                    <div style="width: 22%;" class="progress-bar"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <h2 class="no-margins ">9,180</h2>
                                                <small>Monthly income from orders</small>
                                                <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                                <div class="progress progress-mini">
                                                    <div style="width: 22%;" class="progress-bar"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5 class="text-uppercase">Effectif du parc</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?= start0(count(Home\VEHICULE::parcauto()))  ?></h1>
                                <div class="stat-percent font-bold text-success"><?= start0(count(Home\VEHICULE::libres()))  ?> <i class="fa fa-bolt"></i></div>
                                <small>Libres</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Gestionnaires AMB</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?= start0(count(Home\GESTIONNAIRE::getAll()))  ?></h1>
                                <div class="stat-percent font-bold text-info"><?= start0(count(Home\ADMIN::getAll()))  ?> <i class="fa fa-level-up"></i></div>
                                <small>Admins</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Responsables</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?= start0(count(Home\UTILISATEUR::getAll()))  ?></h1>
                                <div class="stat-percent font-bold text-navy"><?= start0(count(Home\DEPARTEMENT::getAll()))  ?> <i class="fa fa-level-up"></i></div>
                                <small>Departements</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Bénéficiaire Carplan</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?= start0(count(Home\SUGGESTION::getAll()))  ?></h1>
                                <div class="stat-percent font-bold text-danger"><?= start0(count(Home\SUGGESTION::getAll()))  ?> <i class="fa fa-level-down"></i></div>
                                <small>Affectations temporaires</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include($this->rootPath("composants/assets/modals/modal-login.php")); ?> 
        <?php include($this->rootPath("composants/assets/modals/modal-password.php")); ?> 


        <?php include($this->rootPath("webapp/administration/elements/templates/footer.php")); ?>


    </div>
</div>


<?php include($this->rootPath("webapp/administration/elements/templates/script.php")); ?>


</body>

</html>
