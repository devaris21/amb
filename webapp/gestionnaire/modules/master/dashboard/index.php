<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

          <div class="wrapper wrapper-content">
            <div class="animated fadeInRightBig">
                <div class="row" style="margin-top: -2%;">
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Kilometrage moyen du parc</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins"><?= start0(Home\VEHICULE::avgKM())  ?> Km</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Taux d'émission CO<sup>2</sup> du parc</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins">**</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Conso totale de carburant</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins">**</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Âge moyen du parc</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins"><?= start0(Home\VEHICULE::avgAge())  ?> mois</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: -2%;">
                    <div class="col-lg-2">
                        <a href="<?= $this->url("gestionnaire", "master", "parcauto")  ?>" data-toggle="tooltip" title="Véhicules du parc">
                            <div class="widget style1 bg-white text-muted">
                                <div class="row vertical-align">
                                    <div class="col-3">
                                        <i class="fa fa-car fa-3x"></i>
                                    </div>
                                    <div class="col-9 text-right">
                                        <h2 class="font-bold"><?= start0(count(Home\VEHICULE::parcauto())) ?></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="<?= $this->url("gestionnaire", "master", "parcauto")  ?>" data-toggle="tooltip" title="Véhicules disponibles">
                            <div class="widget style1 lazur-bg">
                                <div class="row vertical-align">
                                    <div class="col-3">
                                        <i class="fa fa-car fa-3x"></i>
                                    </div>
                                    <div class="col-9 text-right">
                                        <h2 class="font-bold"><?= start0(count(Home\VEHICULE::libres())) ?></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="<?= $this->url("gestionnaire", "master", "entretiensencours")  ?>" data-toggle="tooltip" title="Véhicules en entretiens">
                            <div class="widget style1 yellow-bg">
                                <div class="row vertical-align">
                                    <div class="col-3">
                                        <i class="fa fa-wrench fa-3x"></i>
                                    </div>
                                    <div class="col-9 text-right">
                                        <h2 class="font-bold"><?= start0(count(Home\ENTRETIENVEHICULE::encours())) ?></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="<?= $this->url("gestionnaire", "master", "sinistres")  ?>" data-toggle="tooltip" title="Déclarations de sinistres en cours">
                            <div class="widget style1 red-bg">
                                <div class="row vertical-align">
                                    <div class="col-3">
                                        <i class="fa fa-unlink fa-3x"></i>
                                    </div>
                                    <div class="col-9 text-right">
                                        <h2 class="font-bold"><?= start0(count(Home\SINISTRE::encours())) ?></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="<?= $this->url("gestionnaire", "master", "missions")  ?>" data-toggle="tooltip" title="missions toujours en cours">
                            <div class="widget style1 blue-bg">
                                <div class="row vertical-align">
                                    <div class="col-3">
                                        <i class="fa fa-plane fa-3x"></i>
                                    </div>
                                    <div class="col-9 text-right">
                                        <h2 class="font-bold"><?= start0(count(Home\MISSION::encours())) ?></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="<?= $this->url("gestionnaire", "master", "Affectations")  ?>" data-toggle="tooltip" title="Affectations toujours en cours">
                            <div class="widget style1 bg-orange">
                                <div class="row vertical-align">
                                    <div class="col-3">
                                        <i class="fa fa-users fa-3x"></i>
                                    </div>
                                    <div class="col-9 text-right">
                                        <h2 class="font-bold"><?= start0(count(Home\AFFECTATION::encours())) ?></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="border-bottom white-bg dashboard-header">
                    <?php 

                    // $tableau = [];
                    // $datas = Home\VEHICULE::getAll();
                    // foreach ($datas as $key => $veh) {
                    //     $veh->actualise();

                    //     $veh->piecevehicules();
                    //     foreach (Home\TYPEPIECEVEHICULE::getAll() as $key => $piece) {
                    //         $name = "piece".$piece->get_id();
                    //         if (dateDiffe(dateAjoute(), $veh->$name) <= $params->delai_alert) {
                    //             $data = new stdclass;
                    //             $data->title = $veh->marque->name." immatriculé ".$veh->immatriculation;
                    //             $data->id = $veh->get_id();
                    //             $data->image = $this->image("vehicules", $veh->image);
                    //             if (dateDiffe($veh->finAssurance(), dateAjoute()) < 0 ) {
                    //                 $data->message = "La pièce '$piece->name' du véhicule expire dans moins de $params->delai_alert jours";
                    //             }else{
                    //                 $data->message = "La pièce '$piece->name' du véhicule a expiré dépuis ".depuis($veh->finAssurance());
                    //             }
                    //             $tableau[] = $data;
                    //         }
                    //     }

                    //     if (dateDiffe(dateAjoute(), $veh->finAssurance()) <= $params->delai_alert ) {
                    //         $data = new stdclass;
                    //         $data->title = $veh->marque->name." immatriculé ".$veh->immatriculation;
                    //         $data->id = $veh->get_id();
                    //         $data->image = $this->image("vehicules", $veh->image);
                    //         if (dateDiffe($veh->finAssurance(), dateAjoute()) < 0 ) {
                    //             $data->message = "L'assurance du véhicule expire dans moins de $params->delai_alert jours";
                    //         }else{
                    //             $data->message = "L'assurance du véhicule a expiré dépuis ".depuis($veh->finAssurance());
                    //         }
                    //         $tableau[] = $data;
                    //     }

                    //     if (dateDiffe(dateAjoute(), $veh->finAssurance()) <= $params->delai_alert ) {
                    //         $data = new stdclass;
                    //         $data->title = $veh->marque->name." immatriculé ".$veh->immatriculation;
                    //         $data->id = $veh->get_id();
                    //         $data->image = $this->image("vehicules", $veh->image);
                    //         if (dateDiffe($veh->finAssurance(), dateAjoute()) < 0 ) {
                    //             $data->message = "L'assurance du véhicule expire dans moins de $params->delai_alert jours";
                    //         }else{
                    //             $data->message = "L'assurance du véhicule a expiré dépuis ".depuis($veh->finAssurance());
                    //         }
                    //         $tableau[] = $data;
                    //     }

                    //     if (dateDiffe(dateAjoute(), $veh->finVisite()) <= $params->delai_alert ) {
                    //         $data = new stdclass;
                    //         $data->title = $veh->marque->name." immatriculé ".$veh->immatriculation;
                    //         $data->id = $veh->get_id();
                    //         $data->image = $this->image("vehicules", $veh->image);
                    //         if (dateDiffe($veh->finVisite(), dateAjoute()) < 0 ) {
                    //             $data->message = "La visite technique du véhicule expire dans moins de $params->delai_alert jours";
                    //         }else{
                    //             $data->message = "La visite technique du véhicule a expiré dépuis ".depuis($veh->finVisite());
                    //         }
                    //         $tableau[] = $data;
                    //     }


                    //     if (dateDiffe(dateAjoute(), $veh->finVidange()) <= $params->delai_alert ) {
                    //         $data = new stdclass;
                    //         $data->title = $veh->marque->name." immatriculé ".$veh->immatriculation;
                    //         $data->id = $veh->get_id();
                    //         $data->image = $this->image("vehicules", $veh->image);
                    //         if (dateDiffe($veh->finVidange(), dateAjoute()) < 0 ) {
                    //             $data->message = "La vidange du véhicule doit etre faite dans moins de $params->delai_alert jours";
                    //         }else{
                    //             $data->message = "La vidange du véhicule a est dépassé et devrait être refaite dépuis ".depuis($veh->finVidange());
                    //         }
                    //         $tableau[] = $data;
                    //     }
                    // }

                    ?>

                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="">ALERTES</h3>
                            <ul class="list-group clear-list m-t">

                                <?php $datas = Home\DEMANDEVEHICULE::encours(); ?>
                                <li class="list-group-item fist-item cursor">
                                    <a class="text-dark" href="<?= $this->url("gestionnaire", "master", "demandevehicules")  ?>">
                                        <i class="fa fa-cab"></i>&nbsp;&nbsp;&nbsp; Demandes de véhicules
                                        <span class="float-right">
                                            <span class="label label-<?= (count($datas) > 0) ? 'danger':'default' ?>"><?= count($datas)  ?></span>
                                        </span>
                                    </a>
                                </li>

                                <?php $datas = Home\DEMANDEENTRETIEN::encours(); ?>
                                <li class="list-group-item cursor">
                                    <a class="text-dark" href="<?= $this->url("gestionnaire", "master", "demandeentretiens")  ?>">
                                        <i class="fa fa-wrench"></i>&nbsp;&nbsp;&nbsp; Demandes d'entretiens
                                        <span class="float-right">
                                            <span class="label label-<?= (count($datas) > 0) ? 'danger':'default' ?>"><?= count($datas)  ?></span>
                                        </span>
                                    </a>
                                </li>


                                <li class="list-group-item cursor" id="group3" data-toggle="dropdown">
                                    <i class="fa fa-ge"></i>&nbsp;&nbsp;&nbsp; Alertes conduites
                                    <span class="float-right">
                                        <span class="label label-<?= ($c > 0) ? 'danger':'default' ?>">**</span>
                                    </span>
                                    <ul class="dropdown-menu" aria-labelledby="group3">
                                        <a class="dropdown-item" href="#">Dropdown link a</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </ul>
                                </li>


                                <?php $datas = Home\AFFECTATION::delai(); ?>
                                <li class="list-group-item cursor">
                                    <a class="text-dark" href="<?= $this->url("gestionnaire", "master", "affectations")  ?>">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp; Alertes Affectations
                                        <span class="float-right">
                                            <span class="label label-<?= (count($datas) > 0) ? 'danger':'default' ?>"><?= count($datas)  ?></span>
                                        </span>
                                    </a>
                                </li>


                                <?php $datas = Home\LOCATION::delai(); ?>
                                <li class="list-group-item cursor">
                                    <a class="text-dark" href="<?= $this->url("gestionnaire", "master", "locations")  ?>">
                                        <i class="fa fa-handshake-o"></i>&nbsp;&nbsp;&nbsp; Alertes Locations
                                        <span class="float-right">
                                            <span class="label label-<?= (count($datas) > 0) ? 'danger':'default' ?>"><?= count($datas)  ?></span>
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-uppercase text-center">Courbe du Kilometrage moyen par mois</h3>
                            <div class="flot-chart dashboard-chart">
                                <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                            </div><hr class="mp0">
                            <div class="row text-center">
                                <div class="col">
                                    <div class=" m-l-md">
                                        <span class="h5 font-bold m-t block"><?= money(Home\ENTRETIENVEHICULE::coutAnnuel()) ?> <?= $params->devise ?></span>
                                        <small class="text-muted m-b block">Coût d'entretien de l'année</small>
                                    </div>
                                </div>
                                <div class="col">
                                    <span class="h5 font-bold m-t block"><?= money(Home\CARTEGRISE::coutAnnuel() + Home\PIECEVEHICULE::coutAnnuel() + Home\ASSURANCE::coutAnnuel() + Home\VISITETECHNIQUE::coutAnnuel()) ?> <?= $params->devise ?></span>
                                    <small class="text-muted m-b block">Coût annuel de la paperasse</small>
                                </div>
                                <div class="col">
                                    <span class="h5 font-bold m-t block">**</span>
                                    <small class="text-muted m-b block">Amendes et péages (annuel)</small>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <h4>Repartition des véhicules</h4><br>
                            <div class="">
                                <canvas id="doughnutChart" style="height: 350px;"></canvas>
                            </div><br>
                            <p>Nombre de véhicule en fonction de leur état actuel</p>    
                        </div>
                    </div>                    
                </div>



            </div>
        </div>
        <br>

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>


    </div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


<script>
    $(document).ready(function() {

        var id = "<?= $this->getId();  ?>";
        if (id == 1) {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Content de vous revoir de nouveau!', 'Bonjour <?= $gestionnaire->name(); ?>');
                unset_session("new");
            }, 1300);
        }
        


        var data1 = [
        [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
        ];
        var data2 = [
        [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
        ];
        $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
            data1, data2
            ],
            {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#d5d5d5'
                },
                colors: ["#1ab394", "#1C84C6"],
                xaxis:{
                },
                yaxis: {
                    ticks: 4
                },
                tooltip: false
            }
            );



        var doughnutData = {
            labels: ["App","Software","Laptop" ],
            datasets: [{
                data: [300,50,100],
                backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };

        var ctx4 = document.getElementById("doughnutChart").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});




        

    });
</script>

</body>

</html>
