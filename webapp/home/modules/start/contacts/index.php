<!DOCTYPE html>
<html>

<?php require $this->path("../../../elements/templates/head.php")  ?>

<body id="wrapper">

    <?php require $this->path("../../../elements/templates/header.php")  ?>


    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>Contactez-nous, <span>nous vous écoutons !</span></h2>
            </div>
        </div>
    </section>



    <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">
                    <div class="section-heading">
                        <h2>Toujours <span>à vos côtés</span></h2>
                        <p class="subheading">SENERGYS, est une entreprise ivoirienne de prestation de services multitechniques avec une expertise et un savoir-faire reconnus! Nous vous assistons dans toutes les étapes de tous vos projets avec nous. Nous mettons à votre disposition plusieurs moyens d'être toujours en contact avec vous.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-laptop"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>Assistance en ligne</h4>
                            <p>Besoin d'assistance ou de renseignements, contactez-nous par téléphone ou accedez à votre espace client et discuter en live avec nos agents.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-bullhorn"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>Service après vente</h4>
                            <p>Nos agents sont toujours disponibles et prêts à vous assister pendant et après toutes nos prestations</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-support"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>votre espace client <span>entierement dédié</span></h4>
                            <p>Parce que vous êtes particulier, nous vous offrons un espace client pour suivre vos projets, et si besoin, demander une assistance !</p>
                        </div>
                    </div>

                </div>
                <!--forms-right-icons-->
                <div class="col-md-6 col-sm-12">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Remplissez votre formulaire</h3>
                                <p>Nous nous engageons à vous répondre dans la journée !</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form method="POST" class="login-form shamman-form" classname="message" callback="toast">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                            <input type="text"  name="fullname" class="form-control" placeholder="Votre nom complet" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                            <input type="email"  name="email" class="form-control" placeholder="Votre adresse email" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                            <input type="tel" name="contact" class="form-control" placeholder="No. Téléphone" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                                            <input type="text"  name="subject" class="form-control" placeholder="Objet du message" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group form-group">
                                            <textarea name="content"  rows="5" cols="100" class="form-control" placeholder="Ecrivez votre message"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="client_id" value="0">
                                <button type="submit" class="btn">Envoyer le message !</button>
                            </form>
                        </div>
                    </div>

                </div>

            </section>


            <section id="contact">
                <div class="overlay">
                    <div class="gmap-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="gmap">
                                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-7 map-content">
                                    <ul class="row">
                                        <li class="col-sm-6">
                                            <address>
                                                <h5>Notre siège social</h5>
                                                <p>Carrefour mary's, Riviéra Palmeraie, <br> Cocody-Abidjan <br> Côte d'Ivoire </p>
                                                <p>Téléphone: +225 22 497 408<br>
                                                    Email: infos@senergys-ci.com<br>
                                                Horaire: Du lundi au vendredi, de 08h00 à 17:00</p>
                                            </address>

                                        </li>
                                        <li class="col-sm-6">
                                            <address>
                                                <h5>Agence Annexe</h5>
                                                <p>Carrefour mary's, Riviéra Palmeraie, <br> Cocody-Abidjan <br> Côte d'Ivoire </p>
                                                <p>Téléphone: +225 22 497 408<br>
                                                    Email: infos@senergys-ci.com<br>
                                                Horaire: Du lundi au vendredi, de 08h00 à 17:00</p>
                                            </address>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            <?php require $this->path("../../../elements/templates/footer.php")  ?>

        </body>

        </html>