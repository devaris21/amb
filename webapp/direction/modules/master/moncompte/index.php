<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/direction/elements/templates/head.php")); ?>


<body class="fixed-sidebar">

    <div id="wrapper">

        <?php include($this->rootPath("webapp/direction/elements/templates/sidebar.php")); ?>  

        <div id="page-wrapper" class="gray-bg">

          <?php include($this->rootPath("webapp/direction/elements/templates/header.php")); ?>  

          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Information personnelles</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <strong>Mon compte</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <!-- <div class="title-action">
                    <a href="" class="btn btn-primary">This is action area</a>
                </div> -->
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="animated fadeInRightBig">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-8 border-right">
                                <div class="row">
                                 <div class="col-md-4">
                                    <div class="">
                                        <div>
                                            <img style="width: 90%;" class="img-thumbnail" src="<?= $this->stockage("images", "utilisateurs", $utilisateur->image) ?>" alt=""><br>
                                            <div class="text-center"><br>
                                                <button data-toggle="modal" data-target="#modal-image" class="btn btn-success btn-xs btn-rounded btn-outline"><i class="fa fa-plus"></i> Changer la photo</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <span data-toggle="modal" data-target="#modal-utilisateur" onclick="modification('utilisateur', <?= $utilisateur->getId(); ?>)" class="float-right mp5"><i class="fa fa-pencil cursor fa-2x"></i></span>
                                    <h2 class="mp0 gras text-navy" style="margin-top: 6px;"><?= $utilisateur->name() ?></h2>
                                    <h5 class="gras"><?= $utilisateur->departement->name ?></h5><br>
                                    <small>Matricule</small>
                                    <h3 class="font-bold"><i class="fa fa-map-marker"></i>  <?= $utilisateur->matricule ?></h3>
                                    <small>Situation géographique</small>
                                    <h3 class="font-bold"><i class="fa fa-map-marker"></i>  <?= $utilisateur->adresse ?></h3>
                                    <small>Adresse email</small>
                                    <h3 class="font-bold"><i class="fa fa-envelope"></i>  <?= $utilisateur->email ?></h3>
                                    <small>Contact</small>
                                    <h3 class="font-bold"><i class="fa fa-phone"></i>  <?= $utilisateur->contact ?></h3>                                    
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <h3 class="mp0 gras text-navy" style="margin-top: 6px;">Login</h3>
                            <h5 class="gras"><?= $utilisateur->login ?>
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
    </div>
</div>


<?php include($this->rootPath("webapp/direction/elements/templates/footer.php")); ?>

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

<?php include($this->rootPath("composants/assets/modals/modal-login.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-password.php")); ?> 

<?php include($this->rootPath("composants/assets/modals/modal-utilisateur.php")); ?> 


</div>
</div>


<?php include($this->rootPath("webapp/direction/elements/templates/script.php")); ?>


</body>

</html>
