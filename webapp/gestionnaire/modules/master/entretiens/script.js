
$("table.liste").DataTable({
    "language": {

        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Rechercher&nbsp;:",
        "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
        "sInfo":           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucune donn&eacute;e disponible dans le tableau",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
            "sFirst":      "Premier",
            "sPrevious":   "Pr&eacute;c&eacute;dent",
            "sNext":       "Suivant",
            "sLast":       "Dernier"
        },
        "oAria": {
            "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
            "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
    },
    "iDisplayLength": 25,
    'ordering'    : true,
    'responsive': false,
    "pagination": true,
    "searching": true,
})


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

