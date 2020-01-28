
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




                                    <div class="col-md-4 align-self-stretch">
                                        <h2 class="subtitle mp5 text-green">Les types de sinistres</h2>
                                        <table class="table table-hover table-striped">
                                            <thead class="bg-orange">
                                                <tr>
                                                    <th>Le sinistre</th>
                                                    <th colspan="2"><button data-toggle="modal" data-target="#modal-typesinistre" class="btn btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($sinistres as $key => $sinistre) { ?>
                                                    <tr>
                                                        <td><?= $sinistre->name ?></td>
                                                        <td class="cursor" data-toggle="modal" data-target="#modal-typesinistre" onclick="modification('typesinistre', <?= $sinistre->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                        <td class="cursor" onclick="suppression_with_password('typesinistre', <?= $sinistre->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="col-md-4 align-self-stretch">
                                        <h2 class="subtitle mp5 text-green">Les types d'entretiens</h2>
                                        <table class="table table-hover table-striped">
                                            <thead class="bg-orange">
                                                <tr>
                                                    <th>Les types d'entretiens</th>
                                                    <th colspan="2"><button data-toggle="modal" data-target="#modal-typeentretienvehicule" class="btn btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($entretiens as $key => $entretien) { ?>
                                                    <tr>
                                                        <td><?= $entretien->name ?></td>
                                                        <td class="cursor" data-toggle="modal" data-target="#modal-typeentretienvehicule" onclick="modification('typeentretienvehicule', <?= $entretien->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                        <td class="cursor" onclick="suppression_with_password('typeentretienvehicule', <?= $entretien->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>



                                    <div class="col-md-4 align-self-stretch">
                                        <h2 class="subtitle mp5 text-green">Les types de demande</h2>
                                        <table class="table table-hover table-striped">
                                            <thead class="bg-orange">
                                                <tr>
                                                    <th>Les types de demande</th>
                                                    <th colspan="2"><button data-toggle="modal" data-target="#modal-typedemandevehicule" class="btn btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($typedemandes as $key => $type) { ?>
                                                    <tr>
                                                        <td><?= $type->name ?></td>
                                                        <td class="cursor" data-toggle="modal" data-target="#modal-typedemandevehicule" onclick="modification('typedemandevehicule', <?= $type->getId() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                        <td class="cursor" onclick="suppression_with_password('typedemandevehicule', <?= $type->getId() ?>)"><i class="fa fa-close text-red"></i></td>
                                                    </tr>
                                                <?php } ?>
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



<div class="modal fade" id="modal-typesinistre">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Type de sinistre</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="typesinistre">
                <div class="modal-body">

                 <div class="">
                    <label>Nom du type<span1>*</span1></label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" required>
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




<div class="modal fade" id="modal-typeentretienvehicule">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Type d'entretien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="typeentretienvehicule">
                <div class="modal-body">

                 <div class="">
                    <label>Nom du type<span1>*</span1></label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" required>
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




<div class="modal fade" id="modal-typedemandevehicule">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Type de demande de véhicule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="typedemandevehicule">
                <div class="modal-body">

                 <div class="">
                    <label>Nom du type<span1>*</span1></label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" required>
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
