<!DOCTYPE html>
<html>

<?php require $this->path("../../../elements/templates/head.php")  ?>

<body id="wrapper">

    <?php require $this->path("../../../elements/templates/header.php")  ?>


    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>Appréciez un savoir-faire, <span>unique !</span></h2>
            </div>
        </div>
    </section>


<section id="about-page-section-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 text-align">
                <div class="section-heading">
                    <h2>nos <span>références</span></h2>
                    <p class="subheading">Ils ont tous été satisfait, ils nous recommende !</p>
                </div>
                <p>
                    Avec plusieurs années d'expertise dans tous nos domaines d'application, nous sommes devenus une <span>référence</span> dans tous ce que nous faisons, pour nos clients, nos partenaires, et pour nous-même.<br>
                    Fort de toutes ces années d'expérience, nous vous offrons le meilleur de la rélation client et expérons vous compter parmis nos nombreux partenaires très bientôt.<br>
                    <span style="font-weight: bold">Senergys</span> vous dit,  Merci !!!

                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 text-right">
                <br>
                <img src="<?= $this->stockage("images", "societe", "logo.png")  ?>" style="width: 70%;" alt="Logo de Senergys-ci">
            </div>
        </div>
    </div>
</section>



  <section id="features-page">
        <div class="subsection1">
            <div class="container">
                <div class="col sm_12">
                    <?php for ($i=0; $i < 20 ; $i++) { ?>
                        <div class="col-sm-4 wpb_column block">
                        <div class="wpb_wrapper">
                            <div class="flip">
                                <div class="iconbox iconbox-style icon-color card clearfix">
                                    <div class="face front">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-laptop boxicon"></i>
                                                        <h3>100% Responsive</h3>
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
                                                        <h3>100% Responsive</h3>
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
                   <?php  } ?>
                </div>
            </div>
        </div>

    </section>

<div>
    <br><br>
</div>

        <?php require $this->path("../../../elements/templates/footer.php")  ?>

    </body>

    </html>


                 <style type="text/css">
                    .wpb_column{
    margin-bottom: 2%;
}
                </style>