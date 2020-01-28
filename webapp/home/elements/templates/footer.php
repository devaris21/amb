
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 block">
                <div class="footer-block">
                    <img src="<?= $this->stockage("images", "societe", "logo.png")  ?>" style="width: 80%;" alt="Logo de Senergys-ci">
                    <hr/>
                    <p>SENERGYS, est une entreprise ivoirienne de prestation de services multitechniques avec une expertise et un savoir-faire reconnus !
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 block">
                <div class="footer-block">
                    <h4>Liens rapides</h4>
                    <hr/>
                    <ul class="footer-links">
                        <li><a href="<?= $this->url("home", "start", "index") ?>">Tous senergys</a></li>
                        <li><a href="<?= $this->url("home", "start", "services") ?>">Nos services</a></li>
                        <li><a href="<?= $this->url("home", "start", "references") ?>">Nos références</a></li>
                        <li><a href="<?= $this->url("home", "start", "contacts") ?>">Contactez-nous</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 block">
                <div class="footer-block">
                    <h4>Assistance</h4>
                    <hr/>
                    <ul class="footer-links">
                        <li><a href="<?= (!isset($client))? $this->url("home", "access", "login") : $this->url("home", "espaceclient", "dashboard") ?>">Espace client</a></li>
                        <li><a href="<?= $this->url("home", "start", "contacts") ?>">Assistance par courrier</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 <block></block>">
                <div class="footer-block">
                    <h4></h4>
                    <hr/>
                    <ul class="footer-links">
                        <li>
                            <a href="#" class="post">certification ISO 9001-2018</a>
                            <p class="post-date">Dépuis septembre 2019</p>
                        </li>
                        <li>
                            <a href="#" class="post">certification ISO 9001-2018</a>
                            <p class="post-date">Dépuis septembre 2019</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="bottom-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 btm-footer-links">
                                <!-- <a href="#">Privacy Policy</a>
                                    <a href="#">Terms of Use</a> -->
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                                    <a href="#">Senergys</a> ,&copy; Copyright 2018 - <?= date("Y") ?> / Tous droits reservés ! <a href="#">By AM</a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div id="panel" class="hide">
                        <div id="panel-admin">
                            <div class="panel-admin-box">
                                <div id="tootlbar_colors">
                                    <button class="color" style="background-color:#1abac8;" onclick="mytheme(0)"></button>
                                    <button class="color" style="background-color:#ff8a00;" onclick="mytheme(1)"> </button>
                                    <button class="color" style="background-color:#b4de50;" onclick="mytheme(2)"> </button>
                                    <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                                    <button class="color" style="background-color:#1abc9c;" onclick="mytheme(4)"> </button>
                                    <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                                </div>
                            </div>

                        </div>
                        <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
                    </div>



                    <footer>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
                        <script src="<?= $this->path("../../../assets/script/index.js") ?>"></script>


                        <?php require $this->path_root("composants/dist/js/plugins_js.php"); ?>

                    </footer>




                    <script type="text/javascript">
                        var page = "<?= $this->getPage(); ?>";
                        $("ul.navbar-nav li a").removeClass('active');
                        $("ul.navbar-nav li a").each(function(index, el) {
                            if ($(this).attr("id") == page) {
                                $(this).addClass('active');                    
                            }
                        });
                    </script>


                    <style type="text/css">
                        li a.active{
                            color: #ff8a00 !important;
                            background-color: transparent;
                            border-bottom-width: 5px;
                            border-bottom-style: solid;
                            border-bottom-color: #ff8a00;
                        }
                    </style>