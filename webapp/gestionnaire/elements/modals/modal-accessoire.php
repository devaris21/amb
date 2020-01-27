<div class="modal fade" id="modal-accessoire">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <h4 class="modal-title">Ajouter un nouvel accessoire</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="accessoire">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Le type d'accessoires<span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "typeaccessoire") ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Nom du accessoire<span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Marque de l'accessoire<span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="marque" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>En stock actuellement <span1>*</span1></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="stock" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label>Décrivez l'accessoire</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" name="comment" ></textarea>
                            </div>
                        </div>                        
                    </div>
                </div><hr class="">
                <div class="container">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-sm  btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i> Valider le formulaire</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
