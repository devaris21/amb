<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/carplan/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/carplan/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/carplan/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>This is main title</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">This is</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Breadcrumb</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="" class="btn btn-primary">This is action area</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class=" animated fadeInRightBig">
                <div class="ibox">
                    <div class="ibox-content">
                     <div class="tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#menu-1">Infos Générale</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#menu-2">Fiche Technique</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#menu-3">Equiments</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#menu-4">Géolocalisation</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#menu-5">Historique du véhicule</a></li>
                        </ul>
                        <div class="tab-content"><br>
                            <div role="tabpanel" id="menu-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-5">

                                        <div class="product-images">
                                            <div>
                                                <img src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-7">
                                        <br>
                                        <h1 class="gras text-navy" style="margin: 0"><strong>4589 HK 01</strong></h1>
                                        <h2 class="font-bold m-b-xs">Toyota RAV 4 alcantara</h2><br>
                                        <h3 class="font-bold m-b-xs">Desktop publishing software</h3>
                                        <small>Many desktop publishing packages and web page editors now.</small>
                                        <div class="m-t-md">
                                            <h2 class="product-main-price">$406,602 <small class="text-muted">Exclude Tax</small> </h2>
                                        </div>
                                        <hr>

                                        <div>
                                           <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <td>Mise en circulation</td>
                                                    <td>Kilometrage actuel</td>
                                                    <td>Kilometrage actuel</td>
                                                    <td>Kilometrage actuel</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <hr>

                                    <div>
                                        <button class="btn btn-warning  dim" type="button"><i class="fa fa-upload"></i> Demander un entretien</button>
                                        <button class="btn btn-outline btn-danger  dim" type="button"><i class="fa fa-upload"></i> Déclarer un sinistre</button>
                                        <button class="btn btn-outline btn-success  dim" type="button"><i class="fa fa-upload"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" id="menu-2" class="tab-pane">
                            <div class="row">
                                <div class="col-md-4">
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <td>Marque</td>
                                                <td></td>
                                            </tr>                                            
                                            <tr>
                                                <td>Modèle</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Couleur</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>N°Chasis</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <td>Energie</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Puissance</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Transmission</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Portieres/Place</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <td>Mise en circulation</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kilometrage actuel</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Sortie de Circulation</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Propriétaire</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                <div role="tabpanel" id="menu-3" class="tab-pane">
                    <div class="panel-body">
                     <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-success btn-sm btn-rounded btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter nouveau</button>
                            <table class="table table-striped table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>Désignation</th>
                                        <th>Quantité</th>
                                        <th colspan="2">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mise en circulation</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div role="tabpanel" id="menu-4" class="tab-pane">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 border-right">
                            <p>
                                With google maps <a href="https://developers.google.com/maps/documentation/javascript/reference#MapOptions">API</a> You can easy customize your map.
                            </p>
                            <div class="google-map" id="map1"></div>
                        </div>
                        <div class="col-md-4">
                            option
                        </div>
                    </div>
                </div>
            </div>


            <div role="tabpanel" id="menu-5" class="tab-pane">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 border-right">
                         <div id="vertical-timeline" class="vertical-container dark-timeline center-orientation">
                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon navy-bg">
                                    <i class="fa fa-briefcase"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Meeting</h2>
                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the sale.
                                    </p>
                                    <a href="#" class="btn btn-sm btn-primary"> More info</a>
                                    <span class="vertical-date">
                                        Today <br/>
                                        <small>Dec 24</small>
                                    </span>
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon blue-bg">
                                    <i class="fa fa-file-text"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Send documents to Mike</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    <a href="#" class="btn btn-sm btn-success"> Download document </a>
                                    <span class="vertical-date">
                                        Today <br/>
                                        <small>Dec 24</small>
                                    </span>
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon lazur-bg">
                                    <i class="fa fa-coffee"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Coffee Break</h2>
                                    <p>Go to shop and find some products. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. </p>
                                    <a href="#" class="btn btn-sm btn-info">Read more</a>
                                    <span class="vertical-date"> Yesterday <br/><small>Dec 23</small></span>
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon yellow-bg">
                                    <i class="fa fa-phone"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Phone with Jeronimo</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                    <span class="vertical-date">Yesterday <br/><small>Dec 23</small></span>
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon lazur-bg">
                                    <i class="fa fa-user-md"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Go to the doctor dr Smith</h2>
                                    <p>Find some issue and go to doctor. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                                    <span class="vertical-date">Yesterday <br/><small>Dec 23</small></span>
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon navy-bg">
                                    <i class="fa fa-comments"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>Chat with Monica and Sandra</h2>
                                    <p>Web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>
                                    <span class="vertical-date">Yesterday <br/><small>Dec 23</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        option
                    </div>
                </div>
            </div>
        </div>


                    </div>
                </div>
            </div>
            <div class="ibox-footer">
                <span class="float-right">
                    Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm
                </span>
                The generated Lorem Ipsum is therefore always free
            </div>
        </div>
    </div>
</div>


<?php include($this->rootPath("webapp/carplan/elements/templates/footer.php")); ?>


</div>
</div>


<?php include($this->rootPath("webapp/carplan/elements/templates/script.php")); ?>


</body>

</html>
