<!DOCTYPE html>
<html lang="fr">

<?php require( $this->path("../../../elements/templates/head.php") ) ?>


<body>
    <!-- Pre-loader start -->
    <?php require $this->path("../../../elements/templates/preloader.php") ?>
    <!-- Pre-loader end -->


    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php require $this->path("../../../elements/templates/header.php") ?>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php require $this->path("../../../elements/templates/sidebar.php") ?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">

                                        <div class="text-center">
                                            <h1 class="title"><span class="text-warning">Senergys-ci</span>  // Espace d'administration</h1>
                                            <br><br>
                                        </div>

                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                          <!--   <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-yellow update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">$30200</h4>
                                                                <h6 class="text-white m-b-0">Clients enregistrés</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-1" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">290+</h4>
                                                                <h6 class="text-white m-b-0">Projets en cours</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-2" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-pink update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">145</h4>
                                                                <h6 class="text-white m-b-0">Task Completed</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-3" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-lite-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">500</h4>
                                                                <h6 class="text-white m-b-0">Downloads</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-4" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- task, page, download counter  end -->

                                            
                                            <!--  sale analytics start -->
                                            <div class="col-xl-9 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Nouveaux messages</h5>
                                                        <span class="text-muted">Les messages recents, pas encore lus</span>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-trash-2 close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="sales-analytics" style="height: 265px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-12">
                                                <div class="card user-card2">
                                                    <div class="card-block text-center">
                                                        <h6 class="m-b-15">Assistance en ligne</h6>
                                                        <div class="risk-rate">
                                                            <span><b>5</b></span>
                                                        </div>
                                                        <h6 class="m-b-10 m-t-10">Vous avez 5 nouvelles demandes d'assistance en ligne</h6>
                                                        <a href="#!" class="text-c-yellow b-b-warning">.</a>
                                                    <!--     <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                                                            <div class="col m-t-15 b-r-default">
                                                                <h6 class="text-muted">Nr</h6>
                                                                <h6>AWS 2455</h6>
                                                            </div>
                                                            <div class="col m-t-15">
                                                                <h6 class="text-muted">Created</h6>
                                                                <h6>30th Sep</h6>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <button class="btn btn-warning btn-block p-t-15 p-b-15">Repondre aux messages</button>
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

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->


<?php require $this->path("../../../elements/templates/footer.php") ?>


</body>

</html>
