
<div class="modal inmodal fade" id="modal-assurance">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Formulaire d'assurance</h4>
                <small class="font-bold">Renseigner ces champs pour enregistrer l'assurance</small>
            </div>
            <form method="POST" class="formShamman" classname="assurance">
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
                                <input class="hide" type="file" name="image1">
                                <button type="button" class="btn btn-sm bg-purple pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label>Illustration 2</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="image2">
                                <button type="button" class="btn btn-sm bg-purple pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>
                    </div>
                </div><hr class="">
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Ajouter l'assurance</button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>
