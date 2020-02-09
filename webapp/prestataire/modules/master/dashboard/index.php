<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/prestataire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/prestataire/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

            <?php include($this->rootPath("webapp/prestataire/elements/templates/header.php")); ?>  

            <div class="wrapper wrapper-content">
                <div class="animated fadeInRightBig">

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

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5 class="text-uppercase">Les demandes de cotations en cours</h5>
                    <div class="ibox-tools">
                        <button style="margin-top: -5%;" data-toggle="modal" data-target="#modal-demandevehicule" class="btn btn-primary btn-xs dim"><i class="fa fa-plus"></i> Demander un véhicule</button>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="animated fadeInRight">
                             <table class="footable table table-stripped toggle-arrow-tiny">
                                <thead>
                                    <tr>
                                        <th data-toggle="true">Project</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th data-hide="all">Company</th>
                                        <th data-hide="all">Completed</th>
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
