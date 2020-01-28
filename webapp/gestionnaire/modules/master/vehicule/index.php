<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="tabs-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li><a class="nav-link active" data-toggle="tab" href="#menu-1">Infos Générale</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#menu-2">Personnel Roulant</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#menu-3">Equiments</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#menu-4">Géolocalisation</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#menu-5">Historique du véhicule</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" id="menu-1" class="tab-pane active">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-6 col-sm-12 border-right">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img alt="image" style="width: 110px;" class="border m-t-xs" src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <span class="label label-success float-right mp5">Monthly</span>
                                        <h1 class="gras text-navy" style="margin: 0"><strong>4589 HK 01</strong></h1>
                                        <address>
                                            <h3 style="margin-top: 6px;"><strong>Toyota RAV 4 alcantara</strong></h3>
                                            Véhicule de <u>conseil de réguclation</u> <br>
                                        </address>
                                    </div>
                                    <div class="col-1 text-center" style="margin: auto;">
                                        <span class=""><i class="fa fa-pencil fa-2x"></i></span><br><br>
                                        <span class=""><i class="fa fa-close text-red fa-2x"></i></span><br>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-sm-1 col-md-4 col-sm-4 border-right">
                                <span class="float-right mp5"><i class="fa fa-gears fa-2x"></i></span>
                                <h3 class="text-green gras">Affecté à </h3>
                                <h2 class="mp0 gras text-navy" style="margin-top: 6px;">Koné Mamadou</h2>
                                <h5 class="gras">Président de lorem</h5>
                                <h4>Du date1 au date2</h4>
                            </div>
                        </div><hr>

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
                    </div>
                </div>

                <div role="tabpanel" id="menu-2" class="tab-pane">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-10">
                                <strong>S'il y en a, veuillez spécifier le personnel roulant de ce véhicule !</strong>
                                <button class="btn btn-success btn-sm btn-rounded btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter nouveau</button>
                                <table class="table table-striped table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>Matricule</th>
                                            <th>Nom & prénoms</th>
                                            <th>Type de permis</th>
                                            <th>Contact</th>
                                            <th>Email</th>
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



<br><br>


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="tabs-container">
        <ul class="nav nav-tabs" role="tablist">
            <li><a class="nav-link active" data-toggle="tab" href="#pieces-1"> Cartes grises</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#pieces-2">Visites Techniques</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#pieces-3">Assurances</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#pieces-4">Autres pièces du véhicules</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#pieces-5">Entretiens du véhicule</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#pieces-5">Sinistres</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" id="pieces-1" class="tab-pane active">
                <div class="panel-body">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5 class="text-uppercase">Toutes les cartes grises de la </h5>
                            <div class="ibox-tools">
                                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Ajouter Nouvelle Carte Grise</a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-hover">
                                <tbody>
                                    <?php for ($i=0; $i < 5; $i++) { ?>
                                        <tr>
                                            <td class="project-status">
                                                <span class="label label-primary">Active</span>
                                            </td>
                                            <td class="project-title">
                                                <a href="project_detail.html">Contract with Zender Company</a>
                                                <br/>
                                                <small>Created 14.08.2014</small>
                                            </td>
                                            <td class="project-completion">
                                                <small>Completion with: 48%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 48%;" class="progress-bar"></div>
                                                </div>
                                            </td>
                                            <td class="project-people">
                                                <a href=""><img alt="image" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>"></a>
                                                <a href=""><img alt="image" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>"></a>
                                                <a href=""><img alt="image" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>"></a>
                                                <a href=""><img alt="image" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>"></a>
                                                <a href=""><img alt="image" style="height: 50px; width: 50px;" src="<?= $this->stockage("images", "vehicules", "default.jpg") ?>"></a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            </td>
                                        </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" id="tab-2" class="tab-pane">
                <div class="panel-body">
                    <strong>Donec quam felis</strong>

                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                    sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                </div>
            </div>

            <div role="tabpanel" id="tab-2" class="tab-pane">
                <div class="panel-body">
                    <strong>Donec quam felis</strong>

                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                    sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                </div>
            </div>

            <div role="tabpanel" id="tab-2" class="tab-pane">
                <div class="panel-body">
                    <strong>Donec quam felis</strong>

                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                    sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                </div>
            </div>

            <div role="tabpanel" id="tab-2" class="tab-pane">
                <div class="panel-body">
                    <strong>Donec quam felis</strong>

                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                    sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>


</div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQTpXj82d8UpCi97wzo_nKXL7nYrd4G70"></script>

</body>

</html>
