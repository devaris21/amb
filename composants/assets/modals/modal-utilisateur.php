

<div class="modal inmodal fade" id="modal-utilisateur">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Formulaire pour les responsables</h4>
                <small class="font-bold">Renseigner ces champs pour enregistrer les informations</small>
            </div>
            <form method="POST" class="formShamman" classname="utilisateur">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 col-sm-6">
                            <label>Dans quelle département <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "departement") ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label>Matricule <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="matricule" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-4 col-sm-6">
                            <label>Nom <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Prenom <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lastname" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Adresse email <span1>*</span1></label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Contact <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" required>
                            </div>
                        </div> 
                        <div class="col-md-4 col-sm-6">
                            <label>Situation géographique </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="adresse" >
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Photo du responsable</label>
                            <div class="">
                                <img style="width: 80px;" src="" class="img-thumbnail logo">
                                <input class="hide" type="file" name="image">
                                <button type="button" class="btn btn-sm bg-purple pull-right btn_image"><i class="fa fa-image"></i> Ajouter une image</button>
                            </div>
                        </div>
                   </div>
                </div><hr>
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-refresh"></i> Valider le formulaire</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
