<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/gestionnaire/elements/templates/header.php")); ?>  


          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-6">
                <h2 class="text-uppercase">Partenaires & responsables</h2>
              
            </div>
            <div class="col-sm-6">
             <div class="row">
                <div class="col-sm-6">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-cloud fa-3x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <span> Tous les prestataires </span>
                                <h2 class="font-bold"><?= start0(count(Home\PRESTATAIRE::getAll()))  ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-12 text-right">
                                <span> Produits déclarés</span>
                                <h2 class="font-bold"><?= start0(count(Home\PRODUIT::getAll()))  ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="wrapper wrapper-content">
        <div class="row">

            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Tous les prestataires agréés </h5>
                        <div class="ibox-tools">
                            <button style="margin-top: -5%" data-toggle="modal" data-target="#modal-prestataire" class="btn btn-primary btn-xs dim"><i class="fa fa-plus"></i> Nouveau prestataire</button>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="bg-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Raison sociale </th>
                                        <th>Adresse & email </th>
                                        <th>Contacts </th>
                                        <th>Nbr produits </th>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($prestataires as $key => $prestataire) { 
                                        $prestataire->actualise();
                                        $prestataire->fourni("produit"); ?>
                                        <tr>
                                             <td class=""><img style="width: 32px" src="<?= $this->stockage("images", "prestataires", $prestataire->image) ?>"></td>
                                            <td>
                                                <b><?= $prestataire->name() ?></b><br>
                                                <small><?= $prestataire->typeprestataire->name ?></small>
                                            </td>
                                            <td>
                                                <i class="fa fa-map-marker"></i> <?= $prestataire->adresse ?><br>
                                                <i class="fa fa-envelope"></i> <?= $prestataire->email ?></td>
                                            <td>
                                                <i class="fa fa-phone"></i> <?= $prestataire->contact ?> <br>
                                                <i class="fa fa-fax"></i> <?= $prestataire->fax ?>
                                            </td>
                                            <td><?= count($prestataire->produits); ?> produits</td>
                                            <td><a href="<?= $this->url("gestionnaire", "users", "prestataire", $prestataire->getId()) ?>" class="btn btn-white btn-sm"><i class="fa fa-eye"></i> Afficher</a></td>
                                            <td>
                                                <button data-toggle="modal" data-target="#modal-prestataire" onclick="modification('prestataire', <?= $prestataire->getId() ?>)" class="btn btn-white btn-sm"><i class="fa fa-pencil text-green"></i> </button>
                                                <button class="btn btn-white btn-sm" onclick="suppressionWithPassword('prestataire', <?= $prestataire->getId(); ?>)"><i class="fa fa-close text-red"></i> </button>
                                            </td>
                                        </tr>  
                                    <?php } ?>                                             
                                </tbody>
                            </table>
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
