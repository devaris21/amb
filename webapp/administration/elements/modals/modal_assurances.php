
<div class="modal fade" id="modal-assur">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Nouvelle assurance de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formAssur">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <label>Nom l'assurance (Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex... Assurance 2019-2020">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Numero de cette assurance <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="numero_piece" required placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Compagnie d'assurance <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="assurance" required placeholder="">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Etablie le <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date_etablissement" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Début de la période de validité <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="started" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Fin de la période de validité <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="finished" required autocomplete="off">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Coût de l'assurance <span1>*</span1></label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="price"  required >
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Exprimer cette période validité <span1>*</span1></label>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="duree" required>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <?php Native\BINDING::html("select", "typeduree"); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  class="row">
                        <div class="col-sm-4">
                            <label>Illustration 1</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo1">
                                <button type="button" class="btn btn-sm bg-purple pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 2</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="photo2">
                                <button type="button" class="btn btn-sm bg-purple pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>
                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Ajouter l'assurance</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>


<div class="modal fade" id="modal-assurance">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Modifier l'assurance de véhicule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" id="formAssur" class="formShamman" classname="assurance">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-4">
                            <label>Nom l'assurance (Titre) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Ex... Assurance 2019-2020">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Numero de cette assurance <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="numero_piece" required placeholder="">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Etablie le <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date_etablissement" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Début de la période de validité <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="started" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Fin de la période de validité <span1>*</span1></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="finished" required autocomplete="no">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Exprimer cette période validité <span1>*</span1></label>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="duree" required>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <?php Native\BINDING::html("select", "typeduree"); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><hr class="">
                <div class="container">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Modifier cette assurance</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>
