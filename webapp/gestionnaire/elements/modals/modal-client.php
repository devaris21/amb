

<div class="modal fade" id="modal-client">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <h5 class="modal-title">Formulaire des clients</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="formShamman" classname="client">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Nom du representant <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="representant" required>
                            </div>
                        </div>
                         <div class="col-md-4 col-sm-6">
                            <label>Nom de l'entreprise <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="entreprise" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Description de l'entreprise <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="description" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Adresse email <span1>*</span1></label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Contact <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Situation géographique</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="adresse" >
                            </div>
                        </div>
                    </div>

                    <div class="text-center"><small>Tous les champs marqués d'un * sont obligatoire !</small></div>

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
