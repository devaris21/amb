$(function(){


$("tr.fini").hide()

$("input[type=checkbox].onoffswitch-checkbox").change(function(event) {
    if($(this).is(":checked")){
        Loader.start()
        setTimeout(function(){
            Loader.stop()
            $("tr.fini").fadeIn(400)
        }, 500);
    }else{
        $("tr.fini").fadeOut(400)
    }
});

$("#top-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("table.table-sinistre tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});



    validerSinistre = function(id){
        var url = "../../webapp/gestionnaire/modules/master/sinistres/ajax.php";
        alerty.confirm("Voulez-vous vraiment valider cette declaration de sinistre de ce véhicule ?", {
            title: "Validation de la declaration",
            cancelLabel : "Non",
            okLabel : "OUI, approuver",
        }, function(){
            $.post(url, {action:"approuver", id:id}, (data)=>{
                if (data.status) {
                    Alerter.success("Demande approuvée", "La validation de la declaration s'est effectué avec succes !");
                    alerty.confirm("Voulez-vous enregistrer l'entretien en même temps ?", {
                        title: "Entretein immédiatement",
                        cancelLabel : "Non, ça va!",
                        okLabel : "OUI, le faire",
                    }, function(){
                        modal("#modal-entretienvehicule2");
                    }, function(){
                        window.location.reload();
                    });
                }else{
                    iziToast.error({
                        title: 'Erreur !',
                        message: data.message,
                    });
                }
            },"json");
        })
    }

    $("form#formEntretien2").submit(function(event) {
        Loader.start()
        var url = "../../webapp/gestionnaire/modules/master/sinistres/ajax.php";
        var formdata = new FormData($(this)[0]);
        formdata.append('action', "entretien2");
        $.post({url:url, data:formdata, contentType:false, processData:false}, function(data){
            if (data.status) {
                window.location.reload();
            }else{
                Alerter.error('Erreur !', data.message);
            }
        }, 'json')
        return false;
    });



    annulerSinistre = function(id){
        var url = "../../webapp/gestionnaire/modules/master/sinistres/ajax.php";
        alerty.confirm("Voulez-vous vraiment refuser cette declaration de sinistre de ce véhicule ?", {
            title: "Annulation de la declaration",
            cancelLabel : "Non",
            okLabel : "OUI, refuser",
        }, function(){
            $.post(url, {action:"refuser", id:id}, (data)=>{
                if (data.status) {
                    window.location.reload()
                }else{
                    iziToast.error({
                        title: 'Erreur !',
                        message: data.message,
                    });
                }
            },"json");
        })
    }


})