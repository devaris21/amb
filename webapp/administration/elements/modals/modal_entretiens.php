

<div class="modal fade" id="modal-entretien">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-orange">
                <h4 class="modal-title">Nouvel entretien du véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formEntretien">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Quel type d'entretien <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typeentretienvehicule"); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Objet de l'entretien (ou Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex...Nouvelle Vidange 2019">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Détails (pannes à reparer etc...) </label>
                            <div class="form-group">
                                <textarea class="form-control" name="comment" rows="5"></textarea>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Début de l'Entretien<span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="started"  required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Fin de l'Entretien<span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="finished"  required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Prestataire de l'entretien <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "prestataire"); ?>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Coût de l'entretien<span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="price" required autocomplete="off">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 1</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo1">
                                <button type="button" class="btn btn-sm bg-orange pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 2</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo2">
                                <button type="button" class="btn btn-sm bg-orange pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Ajouter la fiche de visite technique</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>



<div class="modal fade" id="modal-entretienvehicule">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-orange">
                <h4 class="modal-title">Modifier les infos de l'entretien</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formAssur" class="shamman-form" classname="entretienvehicule">
             <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <label>Quel type d'entretien <span1>*</span1></label>
                        <div class="form-group">
                            <?php Native\BINDING::html("select", "typeentretienvehicule"); ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label>Nom de la fiche (Titre) <span1>*</span1></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" required placeholder="Ex...Nouvelle Vidange 2019">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label>Numero de cette fiche </label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="numero_piece" placeholder="">
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label>Entretien fait le <span1>*</span1></label>
                        <div class="form-group">
                            <input type="date" class="form-control" name="date_etablissement"  required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label>Me rappeler le prochain le <span1>*</span1></label>
                        <div class="form-group">
                            <input type="date" class="form-control" name="finished" required autocomplete="off">
                        </div>
                    </div>
                </div><br>
            </div><hr class="">
            <div class="container">
                <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Modifier cette fiche</button>
            </div>
            <br>
        </form>

    </div>
</div>
</div>



