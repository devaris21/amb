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
                        <button data-toggle="modal" data-target="#modal-produit" class="btn btn-primary btn-xs dim"><i class="fa fa fa-plus"></i> Ajouter nouveau</button>
                        <br>
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
                                    <span> Total produits </span>
                                    <h2 class="font-bold"><?= start0(count($produits)); ?></h2>
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
                                    <span> Total services </span>
                                    <h2 class="font-bold"><?= start0(count($services)); ?></h2>
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
                                    <span> Total véhicules </span>
                                    <h2 class="font-bold"><?= start0(count($vehicules)); ?></h2>
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
                                        <li><a class="nav-link active" data-toggle="tab" href="#presta-1"> Vos Produits</a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#presta-2"> vos Services</a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#presta-3"> vos Véhicules</a></li>
                                    </ul>
                                    <div class="tab-content">
                                       <div role="tabpanel" id="presta-1" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="row">
                                              <?php foreach ($produits as $key => $produit) {
                                                $produit->actualise(); ?>
                                                <div class="col-md-3">
                                                    <div class="ibox">
                                                        <div class="ibox-content product-box">
                                                            <div class="border-bottom" style="height: 200px;">
                                                                <img style="width: 100%;" src="<?= $this->stockage("images", "produits", $produit->image) ?>">
                                                            </div>
                                                            <div class="product-desc">
                                                                <span class="product-price">
                                                                    <?= money($produit->price); ?> <?= $params->devise ?> | <?= $produit->stock ?>
                                                                </span>
                                                                <small class="text-muted"><?= $produit->typeproduit->name ?>
                                                            </small>
                                                            <a href="#" class="product-name"> <?= $produit->name ?>
                                                        </a>
                                                        <!-- TODO element truncate -->
                                                        <div class="border-bottom small m-t-xs" style="height: 50px; overflow: hidden;">
                                                            <?= $produit->comment ?>
                                                        </div>
                                                        <div class="m-t text-righ">
                                                            <button data-toggle="modal" data-target="#modal-produit" onclick="modification('produit', <?= $produit->getId() ?>
                                                            )" class="btn btn-xs btn-outline btn-primary"><i class="fa fa-pencil"></i> Modifier</button>
                                                            <button onclick="modification('produit', <?= $produit->getId() ?>
                                                            )" class="btn btn-xs btn-outline btn-danger"><i class="fa fa-close"></i> Supprimer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>  
                                        <?php } ?>                                                
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" id="presta-2" class="tab-pane">
                                    <div class="panel-body">
                                        <div class="row">
                                            <?php foreach ($services as $key => $produit) {
                                                $produit->actualise(); ?>
                                                <div class="col-md-3">
                                                    <div class="ibox">
                                                        <div class="ibox-content product-box">
                                                            <div class="border-bottom" style="height: 200px;">
                                                                <img style="width: 100%;" src="<?= $this->stockage("images", "produits", $produit->image) ?>">
                                                            </div>
                                                            <div class="product-desc">
                                                                <span class="product-price">
                                                                    <?= money($produit->price); ?> <?= $params->devise ?> | <?= $produit->stock ?>
                                                                </span>
                                                                <small class="text-muted"><?= $produit->typeproduit->name ?>
                                                            </small>
                                                            <a href="#" class="product-name"> <?= $produit->name ?>
                                                        </a>
                                                        <!-- TODO element truncate -->
                                                        <div class="border-bottom small m-t-xs" style="height: 50px; overflow: hidden;">
                                                            <?= $produit->comment ?>
                                                        </div>
                                                        <div class="m-t text-righ">
                                                            <button data-toggle="modal" data-target="#modal-produit" onclick="modification('produit', <?= $produit->getId() ?>
                                                            )" class="btn btn-xs btn-outline btn-primary"><i class="fa fa-pencil"></i> Modifier</button>
                                                            <button onclick="modification('produit', <?= $produit->getId() ?>
                                                            )" class="btn btn-xs btn-outline btn-danger"><i class="fa fa-close"></i> Supprimer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>                                                
                                </div>
                            </div>
                        </div>


                        <div role="tabpanel" id="presta-3" class="tab-pane">
                            <div class="panel-body">
                                <div class="row">
                                  <?php foreach ($vehicules as $key => $produit) {
                                      $produit->actualise(); ?>
                                      <div class="col-md-3">
                                        <div class="ibox">
                                            <div class="ibox-content product-box">
                                                <div class="border-bottom" style="height: 200px;">
                                                    <img style="width: 100%;" src="<?= $this->stockage("images", "produits", $produit->image) ?>">
                                                </div>
                                                <div class="product-desc">
                                                    <span class="product-price">
                                                        <?= money($produit->price); ?> <?= $params->devise ?> | <?= $produit->stock ?>
                                                    </span>
                                                    <small class="text-muted"><?= $produit->typeproduit->name ?>
                                                </small>
                                                <a href="#" class="product-name"> <?= $produit->name ?>
                                            </a>
                                            <!-- TODO element truncate -->
                                            <div class="border-bottom small m-t-xs" style="height: 50px; overflow: hidden;">
                                                <?= $produit->comment ?>
                                            </div>
                                            <div class="m-t text-righ">
                                                <button data-toggle="modal" data-target="#modal-produit" onclick="modification('produit', <?= $produit->getId() ?>
                                                )" class="btn btn-xs btn-outline btn-primary"><i class="fa fa-pencil"></i> Modifier</button>
                                                <button onclick="modification('produit', <?= $produit->getId() ?>
                                                )" class="btn btn-xs btn-outline btn-danger"><i class="fa fa-close"></i> Supprimer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>                                                
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


<?php include($this->rootPath("webapp/prestataire/elements/templates/footer.php")); ?>
<?php include($this->rootPath("composants/assets/modals/modal-produit.php")); ?> 

</div>
</div>


<?php include($this->rootPath("webapp/prestataire/elements/templates/script.php")); ?>


</body>

</html>
