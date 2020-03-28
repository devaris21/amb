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
                                <h5>Kilometrage total du parc</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275800-AP</h1>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>Admins</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Kilometrage moyen du parc</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">AUTO-MOTO</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Kilometrage moyen du parc</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Bugs et Suggestions</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">106,120</h1>
                                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                                <small>Departements</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Âge moyen du parc</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins">22 Démbre 2021</h2>
                                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                                <small>Age moyen du parc</small>
                            </div>
                        </div>
                    </div>
                </div>
<div class="row" style="margin-top: -2%;">
                    <div class="col-lg-2">
                        <div class="widget style1 navy-bg">
                            <div class="row vertical-align">
                                <div class="col-3">
                                    <i class="fa fa-car fa-3x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <h2 class="font-bold">217</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget style1 navy-bg">
                            <div class="row vertical-align">
                                <div class="col-3">
                                    <i class="fa fa-car fa-3x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <h2 class="font-bold">400</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget style1 navy-bg">
                            <div class="row vertical-align">
                                <div class="col-3">
                                    <i class="fa fa-wrench fa-3x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <h2 class="font-bold">10</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget style1 lazur-bg">
                            <div class="row vertical-align">
                                <div class="col-3">
                                    <i class="fa fa-unlink fa-3x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <h2 class="font-bold">120</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget style1 lazur-bg">
                            <div class="row vertical-align">
                                <div class="col-3">
                                    <i class="fa fa-plane fa-3x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <h2 class="font-bold">462</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget style1 yellow-bg">
                            <div class="row vertical-align">
                                <div class="col-3">
                                    <i class="fa fa-users fa-3x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <h2 class="font-bold">610</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row border-bottom white-bg dashboard-header">
                    <div class="col-md-3">
                        <h2>Bienvenue - AMB</h2>
                        <ul class="list-group clear-list m-t">
                            <li class="list-group-item fist-item">
                                <i class="fa fa-car"></i>&nbsp;&nbsp;&nbsp; Demande de véhicule
                                <span class="float-right">
                                    <span class="label label-default">4</span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-wrench"></i>&nbsp;&nbsp;&nbsp; Demande d'entretien
                                <span class="float-right">
                                    <span class="label label-default">4</span>
                                </span>
                            </li>
                             <li class="list-group-item">
                                <i class="fa fa-wrench"></i>&nbsp;&nbsp;&nbsp; Alerte conduite
                                <span class="float-right">
                                    <span class="label label-default">4</span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-tint"></i>&nbsp;&nbsp;&nbsp; Alerte vidange
                                <span class="float-right">
                                    <span class="label label-default">4</span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-paste"></i>&nbsp;&nbsp;&nbsp; Alerte contrat
                                <span class="float-right">
                                    <span class="label label-default">4</span>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp; Alerte Carplan
                                <span class="float-right">
                                    <span class="label label-default">4</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="flot-chart dashboard-chart">
                            <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                        </div>
                        <div class="row text-left">
                            <div class="col">
                                <div class=" m-l-md">
                                    <span class="h5 font-bold m-t block">$ 406,100</span>
                                    <small class="text-muted m-b block">Coût d'entretien de l'année</small>
                                </div>
                            </div>
                            <div class="col">
                                <span class="h5 font-bold m-t block">$ 150,401</span>
                                <small class="text-muted m-b block">Coût annuel de la paperasse</small>
                            </div>
                            <div class="col">
                                <span class="h5 font-bold m-t block">$ 16,822</span>
                                <small class="text-muted m-b block">Half-year revenue margin</small>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistic-box">
                            <h4>
                                Project Beta progress
                            </h4>
                            <p>
                                You have two project with not compleated task.
                            </p>
                            <div class="row text-center">
                                <div class="col-lg-6">
                                    <canvas id="doughnutChart2" width="80" height="80" style="margin: 18px auto 0"></canvas>
                                    <h5 >Kolter</h5>
                                </div>
                                <div class="col-lg-6">
                                    <canvas id="doughnutChart" width="80" height="80" style="margin: 18px auto 0"></canvas>
                                    <h5 >Maxtor</h5>
                                </div>
                            </div>
                            <div class="m-t">
                                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>

        
        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>
        

    </div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


<script>
    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

        }, 1300);


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

        var doughnutData = {
            labels: ["App","Software","Laptop" ],
            datasets: [{
                data: [70,27,85],
                backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

    });
</script>

</body>

</html>
