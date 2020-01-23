    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7 top-header-links">
                    <ul class="contact_links">
                        <li><i class="fa fa-phone"></i><a href="#">+225 22 497 408</a></li>
                        <li><i class="fa fa-envelope"></i><a href="#">infos@senergys-ci.com</a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5 social">
                    <ul class="social_links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="<?= $this->stockage("images", "societe", "logo.png")  ?>" style="height: 60px;" alt="Logo de Senergys-ci">
                        </div>
                        <div id="navbar" class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li><a id="index" href="<?= $this->url("home", "start", "index") ?>">Tous Senergys</a></li>
                                <li><a id="services" href="<?= $this->url("home", "start", "services") ?>">Nos services</a></li>
                                <li><a id="references" href="<?= $this->url("home", "start", "references") ?>">Nos references</a></li>
                                <li><a id="contacts" href="<?= $this->url("home", "start", "contacts") ?>">Contactez-nous</a></li>
                                <!-- <li><a href="<?= (!isset($client)) ? $this->url("home", "access", "login") : $this->url("home", "espaceclient", "dashboard") ?>"><i class="fa fa-user"></i> <span>Votre Espace Client</span></a></li> -->
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </nav>
        </header>
        <!--/.nav-ends -->

