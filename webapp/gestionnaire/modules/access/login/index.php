<!DOCTYPE html>
<html>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/head.php")); ?>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">

                <h2 class="font-bold text-uppercase"><i class="fa fa-shield"></i> Gestionnaire AMB</h2>

                <p>Veuillez entrer vos informations de connexion pour avoir accès à la plateforme de gestion.</p>

                <p>En cas d'oubli ou de perte de votre mot de passe, vous pouvez le recupérer à l'aide de votre email en cliquant sur <br><a href="<?= $this->url("gestionnaire", "access", "reset") ?>">J'ai oublié mon mot de passe !</a>
                </p>

                <p>Pour tous autre chose, veuillez contacter votre administrateur système.</p>

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


 <div class="modal inmodal" id="formNewUser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class="fa fa-laptop modal-icon"></i>
                <h4 class="modal-title">Modal title</h4>
                <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
            </div>
            <div class="modal-body">
                <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged.</p>
                <div class="form-group"><label>Sample Input</label> <input type="email" placeholder="Enter your email" class="form-control"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<?php include($this->rootPath("webapp/gestionnaire/elements/templates/script.php")); ?>

</body>

</html>
