
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
                                        <h2 class="subtitle mp5 text-orange">Les Groupes de véhicules</h2>
                                        <table class="table table-hover table-striped">
                                            <thead class="bg-green">
                                                <tr>
                                                    <th>Nom du groupe</th>
                                                    <th colspan="2"><button data-toggle="modal" data-target="#modal-groupevehicule" class="btn btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($groupevehicules as $key => $type) { ?>
                                                    <tr>
                                                        <td><?= $type->name ?></td>
                                                        <td class="cursor" data-toggle="modal" data-target="#modal-groupevehicule" onclick="modification('groupevehicule', <?= $type->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                        <td class="cursor" onclick="suppression_with_password('groupevehicule', <?= $type->get_id() ?>)"><i class="fa fa-close text-red"></i></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="col-md-4 align-self-stretch">
                                        <h2 class="subtitle mp5 text-orange">Les Types de véhicules</h2>
                                        <table class="table table-hover table-striped">
                                            <thead class="bg-green">
                                                <tr>
                                                    <th>Nom du type</th>
                                                    <th colspan="2"><button data-toggle="modal" data-target="#modal-typevehicule" class="btn btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($typevehicules as $key => $type) { ?>
                                                    <tr>
                                                        <td><?= $type->name ?></td>
                                                        <td class="cursor" data-toggle="modal" data-target="#modal-typevehicule" onclick="modification('typevehicule', <?= $type->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                        <td class="cursor" onclick="suppression_with_password('typevehicule', <?= $type->get_id() ?>)"><i class="fa fa-close text-red"></i></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="col-md-4 align-self-stretch">
                                        <h2 class="subtitle mp5 text-orange">Les types d'energies</h2>
                                        <table class="table table-hover table-striped">
                                            <thead class="bg-green">
                                                <tr>
                                                    <th>Type d'energie</th>
                                                    <th colspan="2"><button data-toggle="modal" data-target="#modal-energie" class="btn btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($energies as $key => $energie) { ?>
                                                    <tr>
                                                        <td><?= $energie->name ?></td>
                                                        <td class="cursor" data-toggle="modal" data-target="#modal-energie" onclick="modification('energie', <?= $energie->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                        <td class="cursor" onclick="suppression_with_password('energie', <?= $energie->get_id() ?>)"><i class="fa fa-close text-red"></i></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="col-md-4 align-self-stretch">
                                        <h2 class="subtitle mp5 text-orange">Les types de pièces</h2>
                                        <table class="table table-hover table-striped">
                                            <thead class="bg-green">
                                                <tr>
                                                    <th>Les pieces de véhicules</th>
                                                    <th colspan="2"><button data-toggle="modal" data-target="#modal-typepiecevehicule" class="btn btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($pieces as $key => $piece) { ?>
                                                    <tr>
                                                        <td><?= $piece->name ?></td>
                                                        <td class="cursor" data-toggle="modal" data-target="#modal-typepiecevehicule" onclick="modification('typepiecevehicule', <?= $piece->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                        <td class="cursor" onclick="suppression_with_password('typepiecevehicule', <?= $piece->get_id() ?>)"><i class="fa fa-close text-red"></i></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="col-md-4 align-self-stretch">
                                        <h2 class="subtitle mp5 text-orange">Les marques de voiture</h2>
                                        <table class="table table-hover table-striped">
                                            <thead class="bg-green">
                                                <tr>
                                                    <th>Nom de la marque</th>
                                                    <th colspan="2"><button data-toggle="modal" data-target="#modal-marque" class="btn btn-outline pull-right"><i class="fa fa-plus"></i> Ajouter</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($marques as $key => $marque) { ?>
                                                    <tr>
                                                        <td><?= $marque->name ?></td>
                                                        <td class="cursor" data-toggle="modal" data-target="#modal-marque" onclick="modification('marque', <?= $marque->get_id() ?>)"><i class="fa fa-pencil text-blue"></i></td>
                                                        <td class="cursor" onclick="suppression_with_password('marque', <?= $marque->get_id() ?>)"><i class="fa fa-close text-red"></i></td>
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



<div class="modal fade" id="modal-groupevehicule">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Groupe de Véhicule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="groupevehicule">
                <div class="modal-body">

                 <div class="">
                    <label>Nom du groupe<span1>*</span1></label>
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



<div class="modal fade" id="modal-typevehicule">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Type de Véhicule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="typevehicule">
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



<div class="modal fade" id="modal-energie">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Type d'energie'</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="energie">
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






<div class="modal fade" id="modal-typepiecevehicule">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Type de pièces administratives</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="typepiecevehicule">
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






<div class="modal fade" id="modal-marque">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Marque de véhicule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="marque">
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
