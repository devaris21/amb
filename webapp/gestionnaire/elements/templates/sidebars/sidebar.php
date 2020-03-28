<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <h1 class="logo-name text-center" style="font-size: 50px; letter-spacing: 5px; margin: 0% auto !important; padding: 0% !important;">AMB</h1>
            <li class="nav-header" style="padding: 15px 10px !important">
                <div class="dropdown profile-element">                        
                    <div class="row">
                        <div class="col-3">
                            <img alt="image" class="rounded-circle" style="width: 35px" src="<?= $this->stockage("images", "gestionnaires", $gestionnaire->image) ?>"/>
                        </div>
                        <div class="col-9">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold"><?= $gestionnaire->fullname(); ?></span>
                                <span class="text-muted text-xs block"><?= $gestionnaire->typegestionnaire->name; ?> <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Mon profil</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="mailbox.html">Vérouiller la session</a></li>
                                <li><a class="dropdown-item" href="login.html">Déconnexion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="logo-element">
                    AMB
                </div>
            </li>
            <li>
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="section" id="master"><a class="nav-link" data-toggle="tab" href="#tab-1"> <i style="font-size: 20px;" class="fa fa-car"></i></a></li>
                        <li class="section" id="location"><a class="nav-link" data-toggle="tab" href="#tab-2"><i style="font-size: 20px;" class="fa fa-map-marker"></i></a></li>
                        <li class="section" id="users"><a class="nav-link" data-toggle="tab" href="#tab-3"><i style="font-size: 20px;" class="fa fa-bank"></i></a></li>
                    </ul>
                    <div class="tab-content">

                        <div id="tab-1" data-id="master" class="tab-pane">
                            <?php require($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar-master.php")) ?>
                        </div>

                        <div id="tab-2" data-id="location" class="tab-pane">
                            <?php require($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar-location.php")) ?>
                        </div>

                        <div id="tab-3" data-id="users" class="tab-pane">
                            <?php require($this->rootPath("webapp/gestionnaire/elements/templates/sidebars/sidebar-users.php")) ?>
                        </div>
                    </div>
                </div>
            </li>


        </ul>

    </div>
</nav>