<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/carplan/elements/templates/head.php")); ?>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">

                <h2 class="font-bold text-uppercase"><i class="fa fa-shield"></i> Bénéficiaire de carplan</h2>

                <p>Veuillez entrer vos informations de connexion pour avoir accès à la plateforme de gestion.</p>

                <p>En cas d'oubli ou de perte de votre mot de passe, vous pouvez le recupérer à l'aide de votre email en cliquant sur <br><a href="<?= $this->url("gestionnaire", "access", "reset") ?>">J'ai oublié mon mot de passe !</a>
                </p>

                <p>Pour tout autre chose, veuillez contacter votre administrateur système.</p>

                <p style="margin-top: 40%;"><a href="<?= $this->url("AMB", "start", "select") ?>"><i class="fa fa-arrow-left"></i> Retour à la plateforme</a></p>

              <!--   <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p> -->

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <h1 class="logo-name text-center" style="font-size: 120px; margin: 0% !important; padding: 0% !important;">AMB</h1>
                    <form method="POST" class="m-t" role="form" id="formConnexion">
                        <div class="form-group">
                            <input type="text" name="login" class="form-control" placeholder="identifiant" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-danger block full-width m-b"><i class="fa fa-check"></i> Se connecter</button>

                        <br><p class="text-center"><a href="<?= $this->url("gestionnaire", "access", "reset") ?>">
                            J'ai oublié mon mot de passe !
                        </a></p>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright AMD, tous droits reservés
            </div>
            <div class="col-md-6 text-right">
             <small>© 2019-2020</small>
         </div>
     </div>
 </div>


 <div class="modal inmodal" id="modalNewUser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Prémière connexion</h4>
            </div>
            <form id="formNewUser" method="post">
                <div class="modal-body">                
                    <p class="text-center">Bienvenue sur votre espace d'administration.<br> Pour plus de sécurité, vous devez changer vos paramètres de connexion pour que vous soyez le seul à les connaitre !</p><br>
                    <div class="form-group">
                        <label>Nouvel identifiant</label>
                        <input type="text" name="login" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nouveau mot de passe</label>
                        <input type="password" name="pass0" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Corfirmer mot de passe</label>
                        <input type="password" name="pass" required class="form-control">
                    </div>
                </div>
                <div class="">
                    <br>
                    <div class="container">
                        <button type="button" class="btn btn-default dim pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                        <button class="btn btn-primary dim pull-right"><i class="fa fa-check"></i> Je suis prêt !</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php include($this->rootPath("webapp/carplan/elements/templates/script.php")); ?>

</body>

</html>
