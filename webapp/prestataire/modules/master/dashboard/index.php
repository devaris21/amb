<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/prestataire/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/prestataire/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

            <?php include($this->rootPath("webapp/prestataire/elements/templates/header.php")); ?>  


            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-md-2">
                    <img style="width: 100%;" src="<?= $this->stockage("images", "prestataires", $prestataire->image); ?>" alt="<?= $prestataire->name() ?>">
                </div>
                <div class="col-sm-6">
                    <h2><?= $prestataire->name() ?></h2>
                    <h4><i class="fa fa-book"></i> Registre N°<?= $prestataire->registre ?></h4>
                    <span><?= $prestataire->typeprestataire->name() ?></span><br>
                    <button data-toggle="modal" data-target="#modal-image" class="btn btn-success btn-xs btn-rounded btn-outline"><i class="fa fa-plus"></i> Changer la photo</button>
                </div>
                <div class="col-sm-4">
                    <div class="title-action">
                        <a href="#" onclick="modification('prestataire', <?= $prestataire->getId() ?>)" data-toggle=modal data-target="#modal-prestataire" class="btn btn-primary"><i class="fa fa-pencil"></i> Modifier les informations</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-md-9">
                        <div class="ibox" >
                            <div class="ibox-content" style="min-height: 400px;">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <?php foreach ($types as $key => $type) { ?>
                                            <li class=""><a class="nav-link" data-toggle="tab" href="#parc<?= $type->getId() ?>"> <?= $type->name ?> &nbsp;&nbsp;&nbsp;<span class="label bg-aqua"><?= count($type->produits) ?></span></a></li>
                                        <?php } ?>
                                    </ul>
                                    <div class="tab-content" id="parcs">
                                        <br>
                                        <?php foreach ($types as $key => $type) { ?>
                                            <div role="tabpanel" id="parc<?= $type->getId() ?>" class="tab-pane">
                                                <?php foreach ($type->produits as $key => $produit) {
                                                    $produit->actualise(); ?>
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td width="100">
                                                                    <img style="width: 100%;" src="<?= $this->stockage("images", "produits", $produit->image); ?>" alt="<?= $produit->name() ?>">
                                                                </td>
                                                                <td class="text-left" width="400">
                                                                    <h3 class="mp0">
                                                                        <a href="#" class="text-navy">
                                                                            <?= $produit->name() ?> &nbsp;&nbsp;&nbsp;&nbsp; | <?= start0($produit->stock) ?>
                                                                        </a>
                                                                    </h3>
                                                                    <span><?= $produit->comment ?></span>
                                                                    <div class="m-t-sm">                                                    <button data-toggle="modal" data-target="#modal-produit" onclick="modification('produit', <?= $produit->getId() ?>
                                                                    )" class="btn btn-xs btn-outline btn-primary"><i class="fa fa-pencil"></i> Modifier</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <button onclick="suppressionWithPassword('produit', <?= $produit->getId() ?>
                                                                    )" class="btn btn-xs btn-outline btn-danger"><i class="fa fa-close"></i> Supprimer</button>
                                                                </div>
                                                            </td>
                                                            <td width="100">
                                                                <h3><?= money($produit->price) ?> <?= $params->devise ?></h3>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">                    

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Supports de contact</h5>
                        </div>
                        <div class="ibox-content text-center">

                            <h3><i class="fa fa-phone"></i> <?= $prestataire->contact ?></h3>
                            <h4><i class="fa fa-fax"></i> <?= $prestataire->fax ?></h4>
                            <h5><i class="fa fa-map-marker"></i> <?= $prestataire->adresse ?></h5>
                            <h5><i class="fa fa-envelope"></i> <?= $prestataire->email ?></h5>
                        </div>
                    </div>

                    <div class="ibox">
                        <div class="ibox-title text-center" style="padding-left: 2%; padding-right: 2%;">
                            <h5>Paramètres de connexion</h5>
                        </div>
                        <div class="ibox-content">
                            <span >Login</span>
                            <h3 class="gras mp0"><?= $prestataire->login ?></h3>
                            <button  data-toggle="modal" data-target="#modal-login" class="btn btn-warning btn-xs btn-rounded btn-outline pull-right"><i class="fa fa-key"></i> Changer le login</button>
                            <br><br>


                            <span >Mot de passe</span>
                            <h3 class="gras mp0">************** </h3>
                            <button data-toggle="modal" data-target="#modal-password"  class="btn btn-danger btn-xs btn-rounded btn-outline pull-right"><i class="fa fa-lock"></i> Changer le mot de passe</button>
                            <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php include($this->rootPath("webapp/prestataire/elements/templates/footer.php")); ?>
        <?php include($this->rootPath("composants/assets/modals/modal-prestataire.php")); ?> 
        <?php include($this->rootPath("composants/assets/modals/modal-produit.php")); ?> 

        <?php include($this->rootPath("composants/assets/modals/modal-login.php")); ?> 
        <?php include($this->rootPath("composants/assets/modals/modal-password.php")); ?> 
        
        <div class="modal inmodal fade" id="modal-image">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Photo de profil</h4>
                        <small class="font-bold">Remplacer la photo de profil</small>
                    </div>
                    <form method="POST" id="formImage">
                        <div class="modal-body">
                            <div class="">
                                <label>Photo de profil</label>
                                <div class="">
                                    <img style="width: 80px;" src="" class="img-thumbnail logo">
                                    <input class="hide" type="file" name="image">
                                    <button type="button" class="btn btn-sm bg-red pull-right btn_image"><i class="fa fa-image"></i> Choisir la photo</button>
                                </div>
                            </div>
                        </div><hr class="">
                        <div class="container">
                            <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                            <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i>Changer la photo</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include($this->rootPath("webapp/prestataire/elements/templates/script.php")); ?>


</body>

</html>
