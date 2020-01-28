
$("#inputSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("table tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});


$("table tr").click(function(event) {
    $("table tr").removeClass('selected')
    $(this).addClass('selected')
});


src = function(categorie, dossier, id){
    var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
    $.post(url, {action: dossier, dossier:dossier, id:id}, function(data) {
        $("div.affichage#"+categorie).html(data);
    }, "html");
}

$("#inputSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("table tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});



$("form#formLivreur").submit(function(event) {
    var url = "../../webapp/flotte/modules/extra/livreurs/ajax.php";
    var formData = new FormData($(this)[0]);
    formData.append('action', 'livreur');
    $.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
        if (data.status) {
            window.location.reload()
        }else{
            iziToast.error({
                title: 'Erreur !',
                message: data.message,
            });
        }
    }, 'json');
    return false;
});

