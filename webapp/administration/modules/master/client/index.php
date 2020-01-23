<!DOCTYPE html>
<html lang="fr">

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
                                        <!--profile cover start-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="cover-profile">
                                                    <div class="profile-bg-img">
                                                        <img class="profile-bg-img img-fluid" src="<?= $this->stockage("images", "societe", "baniere.jpg") ?>" alt="bg-img">
                                                        <div class="card-block user-info">
                                                            <div class="col-md-12">
                                                                <div class="media-left">
                                                                    
                                                                </div>
                                                                <div class="media-body row">
                                                                    <div class="col-lg-12">
                                                                        <div class="user-title">
                                                                            <h2><?= $client->entreprise ?></h2>
                                                                            <span class="text-white"><?= $client->representant ?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="pull-right cover-btn">
                                                                            <button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
                                                                            <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--profile cover end-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- tab header start -->
                                                <div class="tab-header card">
                                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Infos du client</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Les projets</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                     <!--    <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Assistances</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#review" role="tab">Statistiques</a>
                                                            <div class="slide"></div>
                                                        </li> -->
                                                    </ul>
                                                </div>
                                                <!-- tab header end -->
                                                <!-- tab content start -->
                                                <div class="tab-content">
                                                    <!-- tab panel personal start -->
                                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                                        <!-- personal card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">A propos de l'entreprise</h5>
                                                                <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                                    <i class="icofont icofont-edit"></i>
                                                                </button>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table m-0">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">Nom de l'entreprise</th>
                                                                                                        <td><?= $client->entreprise ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Représentant</th>
                                                                                                        <td><?= $client->representant ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Situation géographique</th>
                                                                                                        <td><?= $client->adresse ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Email</th>
                                                                                                        <td><?= $client->email ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Contact</th>
                                                                                                        <td><?= $client->contact ?></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">Créé le </th>
                                                                                                        <td><a href="#!"><span ><?= datelong($client->created) ?></span></a></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Dernière assistance</th>
                                                                                                        <td>(0123) - 4567891</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of general info -->
                                                                        </div>
                                                                        <!-- end of col-lg-12 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                                <!-- end of view-info -->

                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                        <!-- personal card end-->
                                                    </div>
                                                    <!-- tab pane personal end -->
                                                    <!-- tab pane info start -->
                                                    <div class="tab-pane" id="binfo" role="tabpanel">
                                                        <!-- info card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Les differents projets</h5>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="card b-l-danger business-info services">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h4 style="font-size: 18px; display: inline-block;" class="text-center">AMENAGEMENT SALLES DE CONFERENCES</h4>
                                                                                    </a>

                                                                                    <span class="dropdown-toggle addon-btn text-muted pull-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                                                                    </span>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Modifier</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Supprimer</a>
                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> Ajouter des étapes</a>
                                                                                    </div>
                                                                                </div>      
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                                    </div>
                                                                                    <div class="col-sm-12">
                                                                                       <table class="table table-striped table-bordered">
                                                                                           <tbody>
                                                                                               <tr>
                                                                                                   <td><i class="fa fa-circle"></i></td>
                                                                                                   <td>Lorem ipsum dolor sit.</td>
                                                                                                   <td><i class="fa fa-times"></i></td>
                                                                                                   <td><i class="fa fa-times"></i></td>
                                                                                               </tr>
                                                                                               <tr>
                                                                                                   <td><i class="fa fa-circle"></i></td>
                                                                                                   <td>Lorem ipsum dolor sit.</td>
                                                                                                    <td><i class="fa fa-times"></i></td>
                                                                                                    <td><i class="fa fa-times"></i></td>
                                                                                               </tr>
                                                                                               <tr>
                                                                                                   <td><i class="fa fa-check"></i></td>
                                                                                                   <td>Lorem ipsum dolor sit.</td>
                                                                                                    <td><i class="fa fa-times"></i></td>
                                                                                                    <td><i class="fa fa-times"></i></td>
                                                                                               </tr>
                                                                                               <tr>
                                                                                                   <td><i class="fa fa-circle"></i></td>
                                                                                                   <td>Lorem ipsum dolor sit.</td>
                                                                                                    <td><i class="fa fa-times"></i></td>
                                                                                                    <td><i class="fa fa-times"></i></td>
                                                                                               </tr>
                                                                                               <tr>
                                                                                                   <td><i class="fa fa-circle"></i></td>
                                                                                                   <td>Lorem ipsum dolor sit.</td>
                                                                                                    <td><i class="fa fa-times"></i></td>
                                                                                                    <td><i class="fa fa-times"></i></td>
                                                                                               </tr>
                                                                                           </tbody>
                                                                                       </table> 
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- tab pane info end -->
                                                    <!-- tab pane contact start -->
                                                    <div class="tab-pane" id="contacts" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <!-- user contact card left side start -->
                                                                <div class="card">
                                                                    <div class="card-header contact-user">
                                                                        <img class="img-radius img-40" src="..\files\assets\images\avatar-4.jpg" alt="contact-user">
                                                                        <h5 class="m-l-10">John Doe</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <ul class="list-group list-contacts">
                                                                            <li class="list-group-item active"><a href="#">All Contacts</a></li>
                                                                            <li class="list-group-item"><a href="#">Recent Contacts</a></li>
                                                                            <li class="list-group-item"><a href="#">Favourite Contacts</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="card-block groups-contact">
                                                                        <h4>Groups</h4>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item justify-content-between">
                                                                                Project
                                                                                <span class="badge badge-primary badge-pill">30</span>
                                                                            </li>
                                                                            <li class="list-group-item justify-content-between">
                                                                                Notes
                                                                                <span class="badge badge-success badge-pill">20</span>
                                                                            </li>
                                                                            <li class="list-group-item justify-content-between">
                                                                                Activity
                                                                                <span class="badge badge-info badge-pill">100</span>
                                                                            </li>
                                                                            <li class="list-group-item justify-content-between">
                                                                                Schedule
                                                                                <span class="badge badge-danger badge-pill">50</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h4 class="card-title">Contacts<span class="f-15"> (100)</span></h4>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="connection-list">
                                                                            <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-1.jpg" alt="f-1" data-toggle="tooltip" data-placement="top" data-original-title="Airi Satou">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-2.jpg" alt="f-2" data-toggle="tooltip" data-placement="top" data-original-title="Angelica Ramos">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-3.jpg" alt="f-3" data-toggle="tooltip" data-placement="top" data-original-title="Ashton Cox">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-4.jpg" alt="f-4" data-toggle="tooltip" data-placement="top" data-original-title="Cara Stevens">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-5.jpg" alt="f-5" data-toggle="tooltip" data-placement="top" data-original-title="Garrett Winters">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-1.jpg" alt="f-6" data-toggle="tooltip" data-placement="top" data-original-title="Cedric Kelly">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-3.jpg" alt="f-7" data-toggle="tooltip" data-placement="top" data-original-title="Brielle Williamson">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-5.jpg" alt="f-8" data-toggle="tooltip" data-placement="top" data-original-title="Jena Gaines">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- user contact card left side end -->
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <!-- contact data table card start -->
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5 class="card-header-text">Contacts</h5>
                                                                            </div>
                                                                            <div class="card-block contact-details">
                                                                                <div class="data_table_main table-responsive dt-responsive">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- contact data table card end -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- tab pane contact end -->
                                                    <div class="tab-pane" id="review" role="tabpanel">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Review</h5>
                                                            </div>
                                                            <div class="card-block">
                                                           
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Right addon">
                                                                    <span class="input-group-addon"><i class="icofont icofont-send-mail"></i></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- tab content end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main body end -->
                            <div id="styleSelector">

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
<!-- Required Jquery -->

<?php require $this->path("../../../elements/templates/footer.php") ?>

</body>

</html>
