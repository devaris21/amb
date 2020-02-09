
<div class="modal inmodal fade" id="modal-departement">
    <div class="modal-dialog">
        <div class="modal-content">
               <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Formulaire de départements</h4>
            </div>
            <form method="POST" class="formShamman" classname="departement">
                <div class="modal-body">
                 <div class="row">
                    <div class="col-sm-8">
                        <label>Nom du département/direction<span1>*</span1></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label>Sigle<span1>*</span1></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="sigle">
                        </div>
                    </div>
                </div>
            </div><hr>
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
