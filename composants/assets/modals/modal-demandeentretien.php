

<div class="modal inmodal fade" id="modal-demandeentretien">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Formulaire de demande d'entretien</h4>
                <small class="font-bold">Renseigner ces champs pour faire votre demande d'entretien</small>
            </div>
            <form method="POST" class="formShamman" classname="demandeentretien" reload="false">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                           <div class="">
                            <label>Quel type d'entretien <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typeentretienvehicule"); ?>
                            </div>
                        </div>
                        <div class="">
                            <label>Illustration 1</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="image">
                                <button type="button" class="btn btn-sm bg-orange pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Détails de la demande (pannes à reparer etc...) </label>
                        <div class="form-group">
                            <textarea class="form-control" name="comment" rows="5"></textarea>
                        </div>
                    </div>
                </div><br>
            </div><hr class="">
            <div class="container">
                <input type="hidden" name="id">
                <input type="hidden" name="carplan_id" value="<?= $carplan->getId() ?>">
                <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Faire la demande</button>
            </div>
            <br>
        </form>

    </div>
</div>
</div>

