<!DOCTYPE html>
<html>

<?php require $this->path("../../../elements/templates/head.php")  ?>


<body id="wrapper">

    <?php require $this->path("../../../elements/templates/header.php")  ?>


    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>Parce que vous êtes particulier, <br><br> <span>vous avez un espace client dédié !</span></h2>
            </div>
        </div>
    </section>



    <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">
                    <div class="section-heading">
                        <h2>un moyen de suivre <span>vos projets</span> et de vous <span>assister</span></h2>
                        <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-bullhorn"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>Suivi de vos projets</h4>
                            <p>Besoin de savoir à quel étape se situe votre projet, cela est maintenant possible ! </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-support"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>historique d'assistance</h4>
                            <p>Vous avez même la possibilité de consulter tous l'historique de vos assistances et dépannages !</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Authentification</h3>
                                <p>Entrez vos accès pour vous connecter</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="" class="login-form">
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" name="login" class="form-control" placeholder="Identifiant" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" aria-describedby="basic-addon1">
                                </div>

                                <p class="text-center"><a href="#" data-toggle="modal" data-target="#modal-reset"> Mot de passe oublié ?</a></p>
                                <button type="submit" class="btn">Aller à mon espace client !</button>
                            </form>
                        </div>
                    </div>

                </div>

            </section>



            <div class="modal fade" id="modal-new">
                <div class="modal-dialog modal-sm" style="z-index: 999999999">
                    <div class="modal-content" >
                        <div class="modal-header bg-warning">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Première connexion</h4>
                        </div>
                        <form id="form-new" method="POST">
                            <br>
                            <div class="container text-center">
                                <p class="gras italic ">Vous devez changer vos paramètres de connexion pour que vous soyez le seul à les connaitre !</p>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <label>Nouveau login *</label>
                                    <div class="form-group">
                                        <input type="text" name="login" class="form-control" required>
                                    </div>
                                </div>

                                <div>
                                    <label>Nouveau mot de passe *</label>
                                    <div class="form-group">
                                        <input type="password" name="pass0" class="form-control" required>
                                    </div>
                                </div>

                                <div>
                                    <label>Confirmer le mot de passe *</label>
                                    <div class="form-group">
                                        <input type="password" name="pass" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer text-center">
                                <button class="btn btn-xs btn-primary"><i class="fa fa-check"></i> Commencer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 


                       <div class="modal fade" id="modal-reset">
                <div class="modal-dialog" style="z-index: 999999999">
                    <div class="modal-content" >
                        <div class="modal-header bg-warning">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Mot de passe oublié !</h4>
                        </div>
                        <form id="form-reset" method="POST">
                            <br>
                            <div class="container text-center">
                                <p class="gras italic ">Veuillez Entrez votre email d'inscription et nous vous enverrons un mail pour reinitailiser vos paramètres de connexion !</p>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <label>Adresse email</label>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer text-center">
                                <button class="btn btn-xs btn-primary"><i class="fa fa-check"></i> Commencer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php require $this->path("../../../elements/templates/footer.php")  ?>

        </body>

        </html>