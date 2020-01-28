<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/prestataire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/prestataire/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

            <?php include($this->rootPath("webapp/prestataire/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>This is main title</h2>
                <ol class="breadcrumb">
                    <li>
                        <span>Afficher par ...</span><br>
                        <div class="btn-group">
                            <button class="btn btn-primary" type="button">Type</button>
                            <button class="btn btn-white" type="button">Categorie</button>
                            <button class="btn btn-white" type="button">Fabriquant</button>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8 cards">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Income</h5>
                                <span class="label label-success float-right">Monthly</span>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins">40 886,200</h2>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-info float-right">Annual</span>
                                <h5>Orders</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins">275,800</h2>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>New orders</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-primary float-right">Today</span>
                                <h5>visits</h5>
                            </div>
                            <div class="ibox-content">
                                <h2 class="no-margins">106,120</h2>
                                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                                <small>New visits</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">

            <div class="tabs-container">
                <ul class="nav nav-tabs text-uppercase" role="tablist">
                    <li><a class="nav-link active" data-toggle="tab" href="#shop-1"> Produits</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#shop-2">Services</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#shop-2">Véhicules</a></li>
                </ul>
                <div class="tab-content">
                    <br>
                    <div role="tabpanel" id="shop-1" class="tab-pane active">
                       <div class="row">
                           <?php for ($i=0; $i < 11; $i++) { ?>
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
                        <?php  } ?>
                    </div>
                </div>

                <div role="tabpanel" id="shop-2" class="tab-pane">
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
