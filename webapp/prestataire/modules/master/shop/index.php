<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/prestataire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/prestataire/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

            <?php include($this->rootPath("webapp/prestataire/elements/templates/header.php")); ?>  


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

            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row wrapper border-bottom white-bg page-heading">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs text-uppercase" role="tablist">
                                        <li><a class="nav-link active" data-toggle="tab" href="#presta-1"> Produits</a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#presta-1"> Services</a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#presta-2"> Véhicules</a></li>
                                    </ul>
                                    <div class="tab-content">
                                       <div role="tabpanel" id="presta-1" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="ibox">
                                                        <div class="ibox-content product-box">

                                                            <div class="product-imitation">
                                                                [ INFO ]
                                                            </div>
                                                            <div class="product-desc">
                                                                <span class="product-price">
                                                                    $10
                                                                </span>
                                                                <small class="text-muted">Category</small>
                                                                <a href="#" class="product-name"> Product</a>
                                                                <div class="small m-t-xs">
                                                                    Many desktop publishing packages and web page editors now.
                                                                </div>
                                                                <div class="m-t text-righ">

                                                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="ibox">
                                                        <div class="ibox-content product-box">

                                                            <div class="product-imitation">
                                                                [ INFO ]
                                                            </div>
                                                            <div class="product-desc">
                                                                <span class="product-price">
                                                                    $10
                                                                </span>
                                                                <small class="text-muted">Category</small>
                                                                <a href="#" class="product-name"> Product</a>
                                                                <div class="small m-t-xs">
                                                                    Many desktop publishing packages and web page editors now.
                                                                </div>
                                                                <div class="m-t text-righ">

                                                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="ibox">
                                                        <div class="ibox-content product-box active">

                                                            <div class="product-imitation">
                                                                [ INFO ]
                                                            </div>
                                                            <div class="product-desc">
                                                                <span class="product-price">
                                                                    $10
                                                                </span>
                                                                <small class="text-muted">Category</small>
                                                                <a href="#" class="product-name"> Product</a>
                                                                <div class="small m-t-xs">
                                                                    Many desktop publishing packages and web page editors now.
                                                                </div>
                                                                <div class="m-t text-righ">

                                                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="ibox">
                                                        <div class="ibox-content product-box">

                                                            <div class="product-imitation">
                                                                [ INFO ]
                                                            </div>
                                                            <div class="product-desc">
                                                                <span class="product-price">
                                                                    $10
                                                                </span>
                                                                <small class="text-muted">Category</small>
                                                                <a href="#" class="product-name"> Product</a>



                                                                <div class="small m-t-xs">
                                                                    Many desktop publishing packages and web page editors now.
                                                                </div>
                                                                <div class="m-t text-righ">

                                                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <button class="btn btn-primary float-right"><i class="fa fa fa-shopping-cart"></i> Checkout</button>
                            <button class="btn btn-white"><i class="fa fa-arrow-left"></i> Continue shopping</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <?php include($this->rootPath("webapp/prestataire/elements/templates/footer.php")); ?>

</div>
</div>


<?php include($this->rootPath("webapp/prestataire/elements/templates/script.php")); ?>


</body>

</html>
