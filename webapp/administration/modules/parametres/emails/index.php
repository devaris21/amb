
<?php require("../../webapp/administration/assets/includes/head.php") ?>

<body>

    <?php require("../../webapp/administration/assets/includes/preloader.php") ?>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php require("../../webapp/administration/assets/includes/header.php") ?>

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php require("../../webapp/administration/assets/includes/sidebar.php") ?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content"><br>


                            <div class="">
                                <div class="card">
                                    <div class="card-block row d-flex flex-wrap">




                                        <div class="offset-2 col-md-8 align-self-stretch">
                                            <h2 class="subtitle mp5 text-green">La liste des emails</h2>
                                            <table class="table table-hover table-striped">
                                                <thead class="bg-orange">
                                                    <tr>
                                                        <th></th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Email des Ressources Humaines</td>
                                                        <td><?= $params->email_rh ?></td>
                                                        <td class="cursor" data-toggle="modal" data-target="#modal-params1" onclick="modification('params', <?= $params->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email du CSDG</td>
                                                        <td><?= $params->email_csdg ?></td>
                                                        <td class="cursor" data-toggle="modal" data-target="#modal-params2" onclick="modification('params', <?= $params->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email du DG</td>
                                                        <td><?= $params->email_dg ?></td>
                                                        <td class="cursor" data-toggle="modal" data-target="#modal-params3" onclick="modification('params', <?= $params->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></td>
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
        </div>
    </div>



    <div class="modal fade" id="modal-params1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-orange">
                    <h5 class="modal-title">Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form method="POST" class="shamman-form" classname="params">
                    <div class="modal-body">

                       <div class="">
                        <label>Email des ressources humaines<span1>*</span1></label>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email_rh" required>
                        </div>
                    </div>

                </div><hr class="">
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Enregistrer</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>



    <div class="modal fade" id="modal-params2">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-orange">
                    <h5 class="modal-title">Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form method="POST" class="shamman-form" classname="params">
                    <div class="modal-body">

                       <div class="">
                        <label>Email du CSDG<span1>*</span1></label>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email_csdg" required>
                        </div>
                    </div>

                </div><hr class="">
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Enregistrer</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>



    <div class="modal fade" id="modal-params3">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-orange">
                    <h5 class="modal-title">Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form method="POST" class="shamman-form" classname="params">
                    <div class="modal-body">

                       <div class="">
                        <label>Email du DG<span1>*</span1></label>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email_dg" required>
                        </div>
                    </div>

                </div><hr class="">
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Enregistrer</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>

<?php require("../../webapp/administration/assets/includes/footer.php") ?>

</body>

</html>
