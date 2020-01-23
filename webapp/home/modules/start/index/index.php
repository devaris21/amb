<!DOCTYPE html>
<html>

<?php require $this->path("../../../elements/templates/head.php")  ?>

<body id="wrapper">

    <?php require $this->path("../../../elements/templates/header.php")  ?>



    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url(<?= $this->stockage("images", "affiches", "serveurs.jpg") ?>);"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Fournisseur <span>de qualité </span></h1>
                    <p class="banner_txt">Votre allier indispensable pour tous vos projets informatiques, de telecoms, électriques et electroniques</p>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url(<?= $this->stockage("images", "affiches", "fibre.jpg") ?>);"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Integrateur <span>de solutions </span></h1>
                    <p class="banner_txt">Des solutions taillées sur mesure pour votre entreprise dans le but d'accroître votre productivité</p>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url(<?= $this->stockage("images", "affiches", "certification.jpg") ?>);"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Notre expertise <span>à votre service </span></h1>
                    <p class="banner_txt">Notre expertise est réconnue, nous sommes certifié ISO 9001-2018</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Suivant</span>
        </a>

    </div>


    <section id="features-page">
        <div class="subsection1 subsection2" style="background: #fff;">
            <div class="container">
                <div class="col-xs-12 col-sm_12 col-md-12 col-lg-12 left">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 wpb_column">
                        <div class="wpb_wrapper">
                            <img src="<?= $this->stockage("images", "societe", "logo.png")  ?>" style="width: 100%;" alt="Logo de Senergys-ci">
                            <h3>Nous exerçons dans le domaine de...</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 wpb_column block">
                        <div class="col-sm-6 wpb_column block">
                            <div class="wpb_wrapper">
                                <div class="flip">
                                    <div class="iconbox iconbox-style icon-color card clearfix">
                                        <div class="face front">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td style="background-image: url(<?= $this->stockage("images", "services", "it.jpg" ) ?>); background-size: 100% 100%">
                                                            <i class="fa fa-laptop boxicon"></i>
                                                            <h3>SOLUTION IT</h3>
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
                                                            <h4>SOLUTION IT</h4>
                                                            <ul>
                                                                <li>Integrateur de solution IT</li>
                                                                <li>Déploiement infra wifi</li>
                                                                <li>Supervision Réseaux</li>
                                                                <li>Integration Système</li>
                                                            </ul>
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
                                    <div class="iconbox iconbox-style icon-color card clearfix">
                                        <div class="face front">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td style="background-image: url(<?= $this->stockage("images", "services", "maintenance.jpg" ) ?>); background-size: 100% 100%">
                                                            <i class="fa fa-wrench boxicon"></i>
                                                            <h3>MAINTENANCE</h3>
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
                                                            <h4>MAINTENANCE</h4>
                                                            <ul>
                                                                <li>Maintenance mullti technique</li>
                                                                <li>Informatiques</li>
                                                                <li>Climatisation</li>
                                                                <li>Electricité</li>
                                                            </ul>
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
                                    <div class="iconbox iconbox-style icon-color card clearfix">
                                        <div class="face front">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td style="background-image: url(<?= $this->stockage("images", "services", "froid.jpg" ) ?>); background-size: 100% 100%">
                                                            <i class="fa fa-cold boxicon"></i>
                                                            <h3>FROID</h3>
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
                                                            <h4>FROID</h4>
                                                            <ul>
                                                                <li>Climatisation</li>
                                                                <li>Solution pour local serveur</li>
                                                                <li>Installation système VRV, DRV</li>
                                                                <li>Location et location/Vente</li>
                                                            </ul>
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
                                    <div class="iconbox iconbox-style icon-color card clearfix">
                                        <div class="face front">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td style="background-image: url(<?= $this->stockage("images", "services", "cfo.jpg" ) ?>); background-size: 100% 100%">
                                                            <i class="fa fa-laptop boxicon"></i>
                                                            <h3>CONCEPT</h3>
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
                                                            <h4>CONCEPT</h4>
                                                            <ul>
                                                                <li>Conception CFA / CFO </li>
                                                                <li>Bureau d'étude interne</li>
                                                                <li>Audit câblage CFO/CFA</li>
                                                            </ul>
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
                </div><br><br>

                <div class="container">
                    <div class="col-xs-12 col-sm_12 col-md-12 col-lg-12 left">

                        <div class="col-sm-4 wpb_column block">
                            <div class="wpb_wrapper">
                                <div class="flip">
                                    <div class="iconbox iconbox-style icon-color card clearfix">
                                        <div class="face front">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td style="background-image: url(<?= $this->stockage("images", "services", "facility.jpg" ) ?>); background-size: 100% 100%">
                                                            <i class="fa fa-clear boxicon"></i>
                                                            <h3>FACILITY</h3>
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
                                                            <h4>FACILITY</h4>
                                                            <ul>
                                                                <li>Traveaux d'entretien</li>
                                                                <li>Amenagement de salle technique</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 wpb_column block">
                            <div class="wpb_wrapper">
                                <div class="flip">
                                    <div class="iconbox iconbox-style icon-color card clearfix">
                                        <div class="face front">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td style="background-image: url(<?= $this->stockage("images", "services", "telecoms.jpg" ) ?>); background-size: 100% 100%">
                                                            <i class="fa fa-wifi boxicon"></i>
                                                            <h3>TELECOMS</h3>
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
                                                            <h4>TELECOMS</h4>
                                                            <ul>
                                                                <li>Mise en conformité</li>
                                                                <li>Génié civil télécoms</li>
                                                                <li>Site GSM</li>
                                                                <li>Energie</li>
                                                                <li>Fibre optique</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 wpb_column block">
                            <div class="wpb_wrapper">
                                <div class="flip">
                                    <div class="iconbox iconbox-style icon-color card clearfix">
                                        <div class="face front">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td style="background-image: url(<?= $this->stockage("images", "services", "electricite.jpg" ) ?>); background-size: 100% 100%">
                                                            <i class="fa fa-laptop boxicon"></i>
                                                            <h3>ELECTRICITE</h3>
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
                                                            <h4>ELECTRICITE</h4>
                                                            <ul>
                                                                <li>Courant Fort</li>
                                                                <li>Courant faible</li>
                                                                <li>Mise en conformité CFA/CFO</li>
                                                                <li>Installation CATV/IPTV</li>
                                                                <li>Système de sonorisation</li>
                                                            </ul>
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


        <section id="about">
            <div class="image-holder col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
                <div class="background-imgholder">
                    <img src="img/1.jpg" alt="about" class="img-responsive" style="display:none;" />
                </div>
            </div>

            <div class="container-fluid">

                <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12 text-inner ">
                    <div class="text-block">
                        <div class="section-heading">
                            <h1>Nos <span>GARANTIES</span></h1>
                            <p class="subheading">Nous vous garantissons tous ces points pour tous vos projets</p>
                        </div>

                        <ul class="aboutul">
                            <li> <i class="fa fa-check"></i>Une main d'oeuvre qualifiée et professionnelle,</li>
                            <li> <i class="fa fa-check"></i>Rapidité et précision pour le respect des délais,</li>
                            <li> <i class="fa fa-check"></i>Un compte-rendu de l'état d'avancement de vos projets,</li>
                            <li> <i class="fa fa-check"></i>Un espace client dédié pour le suivi de vos travaux,</li>
                            <li> <i class="fa fa-check"></i>Assistance et dépanage dans les plus brefs délais (moins de 24H),</li>
                            <li> <i class="fa fa-check"></i>Et toujours avec un grand sourire !</li>
                        </ul>
                        <div class="text-center">
                            <br>
                            <img src="<?= $this->stockage("images", "societe", "logo.png")  ?>" style="height: 90px;" alt="Logo de Senergys-ci">
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section id="process">
            <div class="container">
                <div class="section-heading text-center">
                    <div class="col-md-12 col-xs-12">
                        <h1>Notre expertise, <span>notre savoir-faire</span></h1>
                        <p class="subheading">Un savoir-faire et une expertise reconnue dans ces 4 grands corps de métiers</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 block process-block">
                        <div class="process-icon-holder">
                            <div class="process-border">
                                <span class="process-icon"><a href="#"><i class="fa fa-lightbulb-o feature_icon"></i></a></span></div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="process-text-block">
                                <h4><a href="#">it & télécoms</a></h4>
                                <p>Mise en réseaux, serveurs de stockages, fibre optique, conception et maintenance de projets informatiques, programmtion web, mobile, et biens encore</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 block process-block">
                            <div class="process-icon-holder">
                                <div class="process-border">
                                    <span class="process-icon"><a href="#"><i class="fa fa-cloud-download feature_icon"></i></a></span></div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="process-text-block">
                                    <h4><a href="#">études & conception</a></h4>
                                    <p>Bénéficiez de l’assistance d’un bureau d’étude disponible et de qualité, à votre écoute pour mener à bien vos projets</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 block process-block">
                                <div class="process-icon-holder">
                                    <div class="process-border">
                                        <span class="process-icon"><a href="#"><i class="fa fa-magic feature_icon"></i></a></span></div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="process-text-block">
                                        <h4><a href="#">Electricité & Froid</a></h4>
                                        <p>Courant fort, courant faible, travaux de climatisation, électricité et froid génaral, avec des moyens modernes, et des ressources humaines compétentes.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 block process-block lastchild">
                                    <div class="process-icon-holder">
                                        <div class="process-border">
                                            <span class="process-icon"><a href="#"><i class="fa fa-cog feature_icon"></i></a></span></div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="process-text-block">
                                            <h4><a href="#">FACILTY MANAGEMENT</a></h4>
                                            <p>Beneficier de la meilleure qualité de service. Externalisez la gestion des services généraux dans votre entreprise, avec un partenaire dévoué</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>


                        <section id="features-page">
                            <div class="subsection1">
                                <div class="container">
                                    <div class="section-heading text-center">
                                        <h1>Nos <span>partenaires</span></h1>
                                        <p class="subheading">Ils ne peuvent pas tous, se tromper sur notre compte !!!</p>
                                    </div>
                                    <marquee behavior="alternate" SCROLLAMOUNT="10" onmouseover="this.stop();" onmouseout="this.start();">
                                        <div class="col sm_12">
                                          <?php 
                                          $dir    = realpath("../../stockage/images/partenaires") ;
                                          $files = scandir($dir);
                                          foreach ($files as $key => $image) {
                                              if (strlen($image) > 5) { ?>
                                                 <img src="<?= "../../stockage/images/partenaires/$image" ?>" alt="Logo de Senergys-ci">
                                             <?php }
                                         }
                                         ?>
                                     </div>
                                 </marquee>
                             </div>
                         </div>

                     </section>




                     <section id="features-page">
                        <div class="subsection2">
                            <div class="container">
                                <div class="col-xs-12 col-sm_12 col-md-12 col-lg-12 left">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 wpb_column">
                                        <div class="wpb_wrapper">
                                            <img src="<?= $this->stockage("images", "societe", "logo.png")  ?>" style="width: 80%;" alt="Logo de Senergys-ci">
                                            <h3>Besoin d'une assistance ?</h3>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 wpb_column block">
                                        <div class="wpb_wrapper">
                                            <div class="iconbox iconbox-style-2 icon-color clearfix">
                                                <div class="iconbox-icon">
                                                    <i class="fa fa-lightbulb-o sl-layers boxicon"></i>
                                                </div>
                                                <div class="iconbox-content">
                                                    <h4>assistance en ligne</h4>
                                                    <p>Besoin d'assistance ou de renseignements rapides, contactez-nous par téléphone ou accedez à votre espace client et discuter en live avec nos agents.</p>
                                                    <div class="slider_btn">
                                                        <a href="tel:+22522497408" type="button" class="btn btn-primary slide">assistance en ligne <i class="fa fa-phone"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 wpb_column">
                                        <div class="wpb_wrapper">
                                            <div class="iconbox iconbox-style-2 icon-color clearfix">
                                                <!-- icon-color-greyscale -->
                                                <div class="iconbox-icon">
                                                    <i class="fa fa-cloud-download sl-badge boxicon"></i>
                                                </div>
                                                <div class="iconbox-content">
                                                    <h4>assistance par courrier</h4>
                                                    <p>Ecrivez-nous pour toutes vos préoccupations, et mêmes si vous avez des suggestions à nous faire parvenir, nous serions ravi de vous repondre !</p>
                                                    <div class="slider_btn">
                                                        <a href="<?= $this->url("home", "start", "contact"); ?>" class="btn btn-default slide">assistance par courrier <i class="fa fa-envelope"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <?php require $this->path("../../../elements/templates/footer.php")  ?>

                    </html>

                    <style type="text/css">
                        .wpb_column{
                            margin-bottom: 2%;
                        }

                        td h3{
                            color: blue !important;
                            font-weight: bold;
                            text-shadow: 1px 1px 1px white;
                            letter-spacing: 5px;
                        }
                    </style>