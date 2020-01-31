    $(function(){

        $("body").on("submit", "form.formShamman", function(event) {
            Loader.start()
            name = $(this).attr('classname');
            url = "../../composants/dist/shamman/traitement.php";
            var formdata = new FormData($(this)[0]);
            formdata.append('action', "save-formShamman");
            formdata.append('classname', name);
            $.post({url:url, data:formdata, contentType:false, processData:false}, function(data){
                if (data.status) {
                    window.location.reload();
                }else{
                     Alerter.error('Erreur !', data.message);
                }
            }, 'json')
            return false;
        });


        enable = function(table, id){
            url = "../../composants/dist/shamman/traitement.php";
            alerty.confirm("Voulez-vous changer la disponible de cet element ?", {
                title: "Changement de disponibilité",
                cancelLabel : "Non",
                okLabel : "OUI, Changer",
            }, function(){
                $.post(url, {action:"enable", table:table, id:id}, (data)=>{
                    if (data.status) {
                        window.location.reload()
                    }else{
                         Alerter.error('Erreur !', data.message);
                    }
                },"json");
            })
        }



        modification = function(table, id){
            url = "../../composants/dist/shamman/traitement.php";
            $.post(url, {action:"get_data", table:table, id:id}, function(data){
                Loader.start();
                if (data.status) {
                    $("form[classname="+table+"] input:not('[type=file]') ").each(function() {
                        var name = $(this).attr("name");
                        $(this).val(data[name]);
                    });

                    $("form[classname="+table+"] select").each(function() {
                        var name = $(this).attr("name");
                        $this = $(this);
                        $this.find("option").each(function() {
                            $(this).removeProp('selected');
                            if ($(this).attr("value") == data[name]) {
                                $(this).prop('selected', 'selected')
                            }
                        });
                        $this.select2();
                        $this.change();
                    });
                    $("form[classname="+table+"] textarea[name=comment]").val(data.comment);
                    $("form[classname="+table+"] .unmodified").hide();
                    Loader.stop();
                }else{
                     Alerter.error('Erreur !', data.message);
                }
            },"json");
        }


        suppression = function(table, id, cascade=false){
            url = "../../composants/dist/shamman/traitement.php";
            alerty.confirm("Voulez-vous vraiment supprimer cet element ?", {
                title: "Suppression",
                cancelLabel : "Non",
                okLabel : "OUI, supprimer",
            }, function(){
                $.post(url, {action:"suppression", table:table, id:id, cascade:cascade}, (data)=>{
                    if (data.status) {
                        window.location.reload()
                    }else{
                         Alerter.error('Erreur !', data.message);
                    }
                },"json");
            })
        }

        suppressionWithPassword = function(table, id, cascade=false){
            url = "../../composants/dist/shamman/traitement.php";
            alerty.confirm("Voulez-vous vraiment supprimer cet element ?", {
                title: "Suppression",
                cancelLabel : "Non",
                okLabel : "OUI, supprimer",
            }, function(){
                alerty.prompt("Entrer votre mot de passe pour confirmer l'opération !", {
                    title: 'Récupération du mot de passe !',
                    inputType : "password",
                    cancelLabel : "Annuler",
                    okLabel : "Mot de passe"
                }, function(password){
                    $.post(url, {action:"suppression_with_password", table:table, id:id, cascade:cascade, password:password}, (data)=>{
                        if (data.status) {
                            window.location.reload()
                        }else{
                            Alerter.error('Erreur !', data.message);
                        }
                    },"json");
                })
            })
        }


        delete_suppression = function(table, id){
            url = "../../composants/dist/shamman/traitement.php";
            alerty.confirm("Voulez-vous vraiment supprimer cet element ?", {
                title: "Suppression",
                cancelLabel : "Non",
                okLabel : "OUI, supprimer",
            }, function(){
                $.post(url, {action:"delete_suppression", table:table, id:id}, (data)=>{
                    if (data.status) {
                        window.location.reload()
                    }else{
                         Alerter.error('Erreur !', data.message);
                    }
                },"json");
            })
        }

        delete_with_password = function(table, id, cascade=false){
            url = "../../composants/dist/shamman/traitement.php";
            alerty.confirm("Voulez-vous vraiment supprimer cet element ?", {
                title: "Suppression",
                cancelLabel : "Non",
                okLabel : "OUI, supprimer",
            }, function(){
                alerty.prompt("Entrer votre mot de passe pour confirmer l'opération !", {
                    title: 'Récupération du mot de passe !',
                    inputType : "password",
                    cancelLabel : "Annuler",
                    okLabel : "Mot de passe"
                }, function(password){
                    $.post(url, {action:"delete_with_password", table:table, id:id, cascade:cascade, password:password}, (data)=>{
                        if (data.status) {
                            window.location.reload()
                        }else{
                             Alerter.error('Erreur !', data.message);
                        }
                    },"json");
                })
            })
        }
    })