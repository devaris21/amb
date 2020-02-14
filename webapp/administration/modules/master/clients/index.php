<!DOCTYPE html>
<html lang="en">

<?php require $this->path("../../../elements/templates/head.php") ?>

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
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page-body start -->
                                    <div class="page-body">

                                       <!-- Base style - Hover table start -->
                                       <div class="card">
                                        <div class="card-header">
                                            <h5>Liste des clients enregistrés // Senergys-ci</h5>
                                            <span></span>
                                            <button data-toggle="modal" data-target="#modal-client" class="btn btn-mini btn-success btn-round float-right"><i class="fa fa-plus"></i> Nouveau client </button>
                                        </div>
                                        <div class="card-block">

                                            <div class="dt-responsive table-responsive">
                                                <table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">
                                                    <thead class="bg-warning">
                                                        <tr>
                                                            <th>Représentant</th>
                                                            <th>Entreprise</th>
                                                            <th>Description</th>
                                                            <th>Localisation</th>
                                                            <th>Email</th>
                                                            <th>Contacts</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($clients as $key => $client) { ?>
                                                            <tr>
                                                                <td><?= $client->representant ?></td>
                                                                <td><?= $client->entreprise ?></td>
                                                                <td><?= $client->description ?></td>
                                                                <td><?= $client->adresse ?></td>
                                                                <td><?= $client->email ?></td>
                                                                <td><?= $client->contact ?></td>
                                                                <td><a href="<?= $this->url("administration", "master", "client", $client->getId()) ?>" class=""><i class="fa fa-eye"> Voir </i> </a></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Base style - Hover table end -->
                                </div>
                                <!-- Page-body end -->
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



<!-- Main-body end -->
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
<!-- Required Jquery -->
<?php require $this->path("../../../elements/templates/footer.php") ?>

<!-- data-table js -->
<script src="..\files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
<script src="..\files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
<script src="..\files\assets\pages\data-table\js\jszip.min.js"></script>
<script src="..\files\assets\pages\data-table\js\pdfmake.min.js"></script>
<script src="..\files\assets\pages\data-table\js\vfs_fonts.js"></script>
<script src="..\files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
<script src="..\files\bower_components\datatables. net-buttons\js\buttons.html5.min.js"></script>
<script src="..\files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
<script src="..\files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
<script src="..\files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>

</body>

</html>
