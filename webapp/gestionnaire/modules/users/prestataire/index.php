<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  


          <div class="row wrapper border-bottom page-heading">
            <div class="col-sm-4">
                <div class="ibox">
                    <div class="ibox-content text-center">
                     <div class="row">
                        <div class="col-3">
                            <img alt="image" class="img-responsive" style="height: 75px;" src="<?= $this->stockage("images", "societe", "avatar.png") ?>">
                        </div>
                        <div class="col-9">
                            <h2><?= $prestataire->name() ?></h2>
                            <h4><?= $prestataire->typeprestataire->name() ?></h4>
                            <p class=" mp0"><?= $prestataire->adresse ?></p>
                            <span class="">RC N° <?= $prestataire->registre ?></span>
                        </div> 
                    </div>  
                    <hr>
                    <div class="text-center">
                        <button onclick="modification('prestataire',<?= $prestataire->getId() ?>)" data-toggle="modal" data-target="#modal-prestataire" class="btn btn-sm btn-white"><i class="fa fa-edit"></i> Modifier les Infos </button>
                        <button onclick="suppressionWithPassword('prestataire',<?= $prestataire->getId() ?>)" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Supprimer</button>
                    </div>                     
                </div>
            </div>
        </div>
        <div class="col-sm-4">
           <div class="ibox">
            <div class="ibox-title">
                <h5>Support de contact</h5>
            </div>
            <div class="ibox-content text-center">
                <h3><i class="fa fa-phone"></i> <?= $prestataire->contact ?></h3>
                <p class="font-bold mp0"><?= $prestataire->email ?></p>
                <p class="font-bold mp0"><i class="fa fa-fax"></i>Fax:  <?= $prestataire->fax ?></p>
                <div class="m-t-sm">
                    <div class="btn-group">
                        <a href="tel:<?= $prestataire->contact ?>" class="btn btn-primary btn-sm"><i class="fa fa-phone"></i> Appeler</a>
                        <a href="mailto:<?= $prestataire->email ?>" class="btn btn-white btn-sm"><i class="fa fa-envelope"></i> Envoyer mail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
       <div class="ibox">
        <div class="ibox-content">
            <p class="font-bold">
                Autres Informations
            </p>

            <hr/>
            <div>
                <a href="#" class="product-name"> Produits : <?= start0(count($prestataire->produits())) ?></a>
                <a href="#" class="product-name"> Services : <?= start0(count($prestataire->services())) ?></a>
                <a href="#" class="product-name"> Véhicules : <?= start0(count($prestataire->vehicules())) ?></a>
            </div>
        </div>
    </div>
</div>
</div>

<div class="wrapper wrapper-content">
    <div class="animated fadeInRightBig">

      <div class="row">
        <div class="col-md-12">

            <div class="ibox">
                <div class="ibox-content">
                    <div class="row wrapper border-bottom white-bg page-heading">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a class="nav-link active" data-toggle="tab" href="#presta-1"> Cotations & dévis</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#presta-2">Produits & Services</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" id="presta-1" class="tab-pane active">
                                    <div class="panel-body">
                                     <table class="footable table table-stripped toggle-arrow-tiny">
                                        <thead>
                                            <tr>
                                                <th data-toggle="true">Objet de la demande</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th data-hide="all">Company</th>
                                                <th data-hide="all">Completed</th>
                                                <th data-hide="all">Task</th>
                                                <th data-hide="all">Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Project - This is example of project</td>
                                                <td>Patrick Smith</td>
                                                <td>0800 051213</td>
                                                <td>Inceptos Hymenaeos Ltd</td>
                                                <td><span class="pie">0.52/1.561</span></td>
                                                <td>20%</td>
                                                <td>Jul 14, 2013</td>
                                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="5">
                                                    <ul class="pagination float-right"></ul>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>


                            <div role="tabpanel" id="presta-2" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <?php foreach ($prestataire->produits as $key => $produit) {
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
                                                    <div class="m-t text-center">
                                                        <a href="<?= $this->url("gestionnaire", "users", "prestataire", $produit->prestataire->getId()) ?>" class="btn btn-xs btn-outline btn-primary"><i class="fa fa-eye"></i> Aller à <?= $produit->prestataire->name() ?></a>
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


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/footer.php")); ?>


</div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>


</body>

</html>
