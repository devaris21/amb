<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-5">
                <h2 class="text-uppercase">Les demandes en attente</h2>
                <div class="container">
                    <div class="row">
                    <div class="col-xs-7">Afficher toutes les demandes</div>
                    <div class="offset-1"></div>
                    <div class="col-xs-4">
                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" checked class="onoffswitch-checkbox" id="example1">
                                <label class="onoffswitch-label" for="example1">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-7">
               <div class="row">
                <div class="col-md-4">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-cloud fa-3x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Today degrees </span>
                                <h2 class="font-bold">26'C</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-envelope-o fa-3x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> messages </span>
                                <h2 class="font-bold">260</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-music fa-3x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> New albums </span>
                                <h2 class="font-bold">12</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="ibox">
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrapper wrapper-content animated fadeInRight">
                            <?php for ($i=0; $i < 15; $i++) { ?>
                                <div class="vote-item">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="vote-actions" style="margin-right: 5%;">
                                                <div class="vote-icon">
                                                    <i class="fa fa-car"> </i>
                                                </div>
                                            </div>
                                            <span class="vote-title">It is a long established fact that a reader will be distracted</span>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio provident, tempore eos nihil totam consequatur.</span>
                                            <div class="vote-info">
                                                <i class="fa fa-clock-o"></i> <a href="#">Emise il y a 2 jours</a>
                                                <i class="fa fa-user"></i> <a href="#">Par Andrew Williams</a>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="vote-icon">
                                                <i class="fa fa-check text-green"> </i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vote-item">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="vote-actions">
                                                <div class="vote-icon">
                                                    <i class="fa fa-wrench"> </i>
                                                </div>
                                            </div>
                                            <span class="vote-title">It is a long established fact that a reader will be distracted</span>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio provident, tempore eos nihil totam consequatur.</span>
                                            <div class="vote-info">
                                                <i class="fa fa-clock-o"></i> <a href="#">Emise il y a 2 jours</a>
                                                <i class="fa fa-user"></i> <a href="#">Par Andrew Williams</a>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="vote-icon">
                                                <i class="fa fa-check"> </i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>

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


</body>

</html>
