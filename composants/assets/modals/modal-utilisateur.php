

<div class="modal fade" id="modal-utilisateur">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <h5 class="modal-title">Formuliare du utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" class="shamman-form" classname="utilisateur">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label>Dans quelle direction <span1>*</span1></label>
                            <div class="form-group">
                                <?php Native\BINDING::html("select", "departement") ?>
                            </div>
                        </div>
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
                            <label>Contact 2 </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact2" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <label>Situation géographique </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="adresse" >
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
