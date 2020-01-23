<!DOCTYPE html>
<html>

<?php require $this->path("../../../elements/templates/head.php")  ?>

<body id="wrapper">

    <?php require $this->path("../../../elements/templates/header.php")  ?>

        <section id="features-page">

         <div class="subsection1">
            <div class="container">
                <div class="col-md-5 section-heading">
                    <br><br>
                    <h1><span><?= $client->entreprise ?></span></h1>
                    <p class="infos"><?= $client->description ?></p>
                    <p class="infos"><?= $client->adresse ?></p>
                    <p class="infos"><?= $client->email ?></p>
                    <p class="infos"><?= $client->contact ?></p>

                    <br><br>
                   <!--  <div class="slider_btn">
                        <button type="button" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                        <button type="button" class="btn btn-primary slide">Learn More <i class="fa fa-caret-right"></i></button>
                    </div> -->
                </div>

                <div class="col-md-7">
                    <div class="col-sm-6 wpb_column block">
                        <div class="wpb_wrapper">
                            <div class="flip">
                                <div class="iconbox iconbox-style icon-color card clearfix">
                                    <div class="face front">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-laptop boxicon"></i>
                                                        <h3>Suivre mes projets</h3>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="iconbox-box2 face back">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h3>Suivre mes projets</h3>
                                                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wpb_column block">
                        <div class="wpb_wrapper">
                            <div class="flip">
                                <div class="iconbox  iconbox-style icon-color card clearfix">
                                    <div class="iconbox-box1 face front">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="<?= $this->stockage("images", "societe", "logo.png")  ?>" style="height: 80px;" alt="Logo de Senergys-ci">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="iconbox-box2 face back">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h3>Senergys-ci</h3>
                                                        <p>Vous satisfaire est au coeur de notre politique de gestion, et ça, vous pouvez le remarquer !</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wpb_colum block">
                        <div class="wpb_wrapper">
                            <div class="flip">
                                <div class="iconbox  iconbox-style icon-color card clearfix">
                                    <div class="iconbox-box1 face front">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-support boxicon"></i>
                                                        <h3>Statistiques</h3>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="iconbox-box2 face back">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h3>Statistiques</h3>
                                                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wpb_colum block">
                        <div class="wpb_wrapper">
                            <div class="flip">
                                <div class="iconbox  iconbox-style icon-color card clearfix">
                                    <div class="iconbox-box1 face front">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-support boxicon"></i>
                                                        <h3>Besoin d'assistance</h3>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="iconbox-box2 face back">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h3>Besoin d'assistance</h3>
                                                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut</p>
                                                    </td>
                                                </tr>
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

    </section>

    <section id="features">
        <div class="container">
            <div class="section-heading text-center">
                <h1>Our <span>Plans</span></h1>
                <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset nam nostrud euismod volumus ne mei.</p>
            </div>

            <div class="row">
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-laptop feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>100% Responsive travail <i class="pull-right fa fa-circle text-danger"></i></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum. <small class="text-muted italic">-- aujourdhui à 15h00</small></p>
                        <a href="#" class="readmore"> En savoir plus <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-bullhorn feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Powerful Features</h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</p>
                        <a href="#" class="readmore"> En savoir plus <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-support feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Customer Support</h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</p>
                        <a href="#" class="readmore"> En savoir plus <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php require $this->path("../../../elements/templates/footer.php")  ?>

</body>

</html>