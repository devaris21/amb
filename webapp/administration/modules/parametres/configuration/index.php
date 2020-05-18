<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/administration/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/administration/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

            <?php include($this->rootPath("webapp/administration/elements/templates/header.php")); ?>  

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-8">
                    <h2>Configuration de Base / Administration</h2>
                </div>
                <div class="col-sm-4">

                </div>
            </div>

            <div class="wrapper wrapper-content" id="autos">
                <div class="animated fadeInRightBig">
                    <div class="ibox" >
                        <div class="ibox-content" style="min-height: 400px;">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class=""><a class="nav-link " data-toggle="tab" href="#moncompte">Mon compte </a></li>
                                    <li class=""><a class="nav-link active" data-toggle="tab" href="#info">Informations générales auto </a></li>
                                    <li class=""><a class="nav-link " data-toggle="tab" href="#user">Configuration Utilisateurs </a></li>
                                </ul><br>                               
                                <div class="tab-content">

                                    <div role="tabpanel" id="moncompte" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-8 border-right">
                                                    <div class="row">
                                                       <div class="col-md-4">
                                                        <div class="">
                                                            <div>
                                                                <img style="width: 90%;" class="img-thumbnail" src="<?= $this->stockage("images", "admins", $admin->image) ?>" alt=""><br>
                                                                <div class="text-center"><br>
                                                                    <button data-toggle="modal" data-target="#modal-image" class="btn btn-success btn-xs btn-rounded btn-outline"><i class="fa fa-plus"></i> Changer la photo</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span data-toggle="modal" data-target="#modal-admin" onclick="modification('admin', <?= $admin->getId(); ?>)" class="float-right mp5"><i class="fa fa-pencil cursor fa-2x"></i></span>
                                                        <h2 class="mp0 gras text-navy" style="margin-top: 6px;"><?= $admin->name() ?></h2>
                                                        <h5 class="gras">Super Administrateur</h5><br>

                                                        <small>Situation géographique</small>
                                                        <h3 class="font-bold"><i class="fa fa-map-marker"></i>  <?= $admin->adresse ?></h3>
                                                        <small>Adresse email</small>
                                                        <h3 class="font-bold"><i class="fa fa-envelope"></i>  <?= $admin->email ?></h3>
                                                        <small>Contact</small>
                                                        <h3 class="font-bold"><i class="fa fa-phone"></i>  <?= $admin->contact ?></h3>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <h3 class="mp0 gras text-navy" style="margin-top: 6px;">Login</h3>
                                                <h5 class="gras"><?= $admin->login ?>
                                                <button  data-toggle="modal" data-target="#modal-login" class="btn btn-warning btn-xs btn-rounded btn-outline pull-right"><i class="fa fa-key"></i> Changer le login</button>
                                            </h5>
                                            <br><br>


                                            <h3 class="mp0 gras text-navy" style="margin-top: 6px;">Mot de passe</h3>
                                            <h5 class="gras">************** 
                                                <button data-toggle="modal" data-target="#modal-password"  class="btn btn-danger btn-xs btn-rounded btn-outline pull-right"><i class="fa fa-lock"></i> Changer le mot de passe</button>
                                            </h5>
                                            <br>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" id="info" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-8 border-right">
                                        <div class="ibox">
                                            <div class="ibox-content"><br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="text-muted">Raison sociale ou nom de la société</span>
                                                        <h2 class="gras text-uppercase text-primary"><?= $params->societe ?></h2>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Situation Géographique</span>
                                                        <h4><?= $params->adresse ?></h4>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Contacts</span>
                                                        <h4><?= $params->contact ?></h4>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Email</span>
                                                        <h4><?= $params->email ?></h4>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Boite Postale</span>
                                                        <h4><?= $params->postale ?></h4>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Fax</span>
                                                        <h4><?= $params->fax ?></h4>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <span class="text-muted">Devise</span>
                                                        <h4><?= $params->devise ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4 col-sm-6 text-center">
                                        <h4 class="text-muted text-uppercase">Votre logo</h4>
                                        <img style="width: 240px" src="<?= $this->stockage("images", "societe", $params->image)  ?>">
                                    </div>

                                </div><hr>
                                <div>
                                    <button onclick="modification('params', <?= $params->getId() ?>)" class="btn btn-primary dim pull-right" data-toggle="modal" data-target="#modal-params"><i class="fa fa-pencil"></i> Modifier les informations</button>
                                </div><br><br><br>
                            </div>







                            <div role="tabpanel" id="paperasse" class="tab-pane">


                            </div>





                            <div role="tabpanel" id="user" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                        <div class="ibox border">
                                            <div class="ibox-title">
                                                <h5 class="text-uppercase">Type de prestataire</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-plus"></i> Ajouter
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Libéllé</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i =0; foreach (Home\TYPEPRESTATAIRE::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                            $i++; ?>
                                                            <tr>
                                                                <td><?= $i ?></td>
                                                                <td><?= $item->name(); ?></td>
                                                                <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('typeprestataire', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('typeprestataire', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                        <div class="ibox border">
                                            <div class="ibox-title">
                                                <h5 class="text-uppercase">type de produit de prestataire</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-plus"></i> Ajouter
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Libéllé</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i =0; foreach (Home\TYPEPRODUIT::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                            $i++; ?>
                                                            <tr>
                                                                <td><?= $i ?></td>
                                                                <td><?= $item->name(); ?></td>
                                                                <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('typeproduit', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('typeproduit', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 bloc">
                                        <div class="ibox border">
                                            <div class="ibox-title">
                                                <h5 class="text-uppercase">Type d'énergie</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-plus"></i> Ajouter
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Libéllé</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i =0; foreach (Home\ENERGIE::findBy([], [], ["name"=>"ASC"]) as $key => $item) {
                                                            $i++; ?>
                                                            <tr>
                                                                <td><?= $i ?></td>
                                                                <td><?= $item->name(); ?></td>
                                                                <td data-toggle="data-toggle" title="modifier l'élément" onclick="modification('energie', <?= $item->getId() ?>)"><i class="fa fa-pencil text-blue cursor"></i></td>
                                                                <td data-toggle="data-toggle" title="modifier l'élément" onclick="suppression('energie', <?= $item->getId() ?>)"><i class="fa fa-close cursor text-danger"></i></td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include($this->rootPath("webapp/administration/elements/templates/footer.php")); ?>


</div>
</div>

<?php include($this->rootPath("composants/assets/modals/modal-params.php")); ?>  

<?php include($this->rootPath("composants/assets/modals/modal-admin.php")); ?>  
<?php include($this->rootPath("composants/assets/modals/modal-login.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-password.php")); ?> 


<?php include($this->rootPath("webapp/administration/elements/templates/script.php")); ?>


</body>

</html>
