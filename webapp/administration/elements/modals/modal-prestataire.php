
<div class="modal fade" id="modal-prestataire">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <h5 class="modal-title">Formuliare du prestataire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="formShamman" classname="prestataire">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <label>Type de prestataire <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typeprestataire") ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Raison sociale (ou Nom) <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <label>Situation géographique <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="adresse" required>
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
                            <label>Contact 2 <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact2" required>
                            </div>
                        </div>
                    </div>
                                    </div><hr>
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm bg-green pull-right"><i class="fa fa-refresh"></i> Valider le formulaire</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>

