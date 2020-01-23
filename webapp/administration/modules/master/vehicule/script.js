

$(function(){

	$("table tr").click(function(event) {
		$("table tr").removeClass('selected')
		$(this).addClass('selected')
	});

	$('body').on("click", "button.btn_image", function(event) {
		$(this).prev("input[type=file]").trigger('click');
	});

	$('body').on("change", ".modal input[type=file]", function(e) {
		var src = URL.createObjectURL(e.target.files[0])
		$(this).prev("img.logo").attr('src', src);
	});


	src = function(categorie, dossier, id){
		var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
		$.post(url, {action: dossier, dossier:dossier, id:id}, function(data) {
			$("div.affichage#"+categorie).html(data);
		}, "html");
	}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


reaffecter = function(id){
	var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
	alerty.confirm("Voulez-vous vraiment reconduire cette affectation à cet meme utilisateur ?<br> Ce processus mettra fin automatiquement à l'affectation en cours", {
		title: "Reaffectation",
		cancelLabel : "Non",
		okLabel : "OUI, reconduire",
	}, function(){
		alerty.prompt("Entrer la nouvelle date de fin de cette affectation !", {
			title: 'Nouvelle date !',
			inputType : "date",
			cancelLabel : "Annuler",
			okLabel : "continuer"
		}, function(ladate){
			alerty.prompt("Entrer votre mot de passe pour confirmer l'opération !", {
				title: 'Récupération du mot de passe !',
				inputType : "password",
				cancelLabel : "Annuler",
				okLabel : "Confirmer"
			}, function(password){
				loading()
				$.post(url, {action:"reaffectation", id:id, ladate:ladate, password:password}, (data)=>{
					if (data.status) {
						window.location.reload()
					}else{
						deloading()
						iziToast.error({
							title: 'Erreur !',
							message: data.message,
						});
					}
				},"json");
			})
		})
	})
}


indisponible = function(){
	var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
	alerty.confirm("Voulez-vous vraiment rendre ce vehicule indisponible pour les futures opérations ? ", {
		title: "indisponibilité du véhicule",
		cancelLabel : "Non",
		okLabel : "OUI, rendre indisponible",
	}, function(){
		alerty.prompt("Entrer votre mot de passe pour confirmer l'opération !", {
			title: 'Récupération du mot de passe !',
			inputType : "password",
			cancelLabel : "Annuler",
			okLabel : "Confirmer"
		}, function(password){
			loading()
			$.post(url, {action:"indisponible", password:password}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					deloading()
					iziToast.error({
						title: 'Erreur !',
						message: data.message,
					});
				}
			},"json");
		})
	})
}



disponible = function(){
	var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
	alerty.confirm("Voulez-vous vraiment rendre ce vehicule à nouveau disponible ? ", {
		title: "Disponibilité du véhicule",
		cancelLabel : "Non",
		okLabel : "OUI, rendre disponible",
	}, function(){
		alerty.prompt("Entrer votre mot de passe pour confirmer l'opération !", {
			title: 'Récupération du mot de passe !',
			inputType : "password",
			cancelLabel : "Annuler",
			okLabel : "Confirmer"
		}, function(password){
			loading()
			$.post(url, {action:"disponible", password:password}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					deloading()
					iziToast.error({
						title: 'Erreur !',
						message: data.message,
					});
				}
			},"json");
		})
	})
}



out = function(){
	var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
	alerty.confirm("Etes-vous sur que ce véhicule n'est plus dans le parc automobile ? ", {
		title: "Sortie de véhicule",
		cancelLabel : "Non",
		okLabel : "OUI, confirmer",
	}, function(){
		alerty.prompt("Entrer votre mot de passe pour confirmer l'opération !", {
			title: 'Récupération du mot de passe !',
			inputType : "password",
			cancelLabel : "Annuler",
			okLabel : "Confirmer"
		}, function(password){
			loading()
			$.post(url, {action:"out", password:password}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					deloading()
					iziToast.error({
						title: 'Erreur !',
						message: data.message,
					});
				}
			},"json");
		})
	})
}


$("form#formPret").submit(function(event) {
	var formData = new FormData($(this)[0]);
	alerty.confirm("Voulez-vous vraiment valider cet pret de véhicule ?", {
		title: "Pret de véhicules",
		cancelLabel : "Non",
		okLabel : "OUI,  valider",
	}, function(){
		var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
		formData.append('action', 'pret');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			loading()
			if (data.status) {
				location.reload();
			}else{
				deloading()
				iziToast.error({
					title: 'Erreur !',
					message: data.message,
				});
			}
		}, 'json');
	})
	return false;
});



$("textarea[name=commentvehicule]").change(function(){
	loading()
	var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
	var val = $(this).val()
	$.post(url, {action: "comment", val:val}, function(data) {
		if (data.status) {
			deloading()
			alerty.toasts("Bloc-note du véhicule mis à jour !", 5000);
		}else{
			deloading()
			iziToast.error({
				title: 'Erreur !',
				message: data.message,
			});
		}
	}, 'json');
})






	////////////////////////////////////////////////////////////////////
	//ACCESSOIRE ET EQUIPEMENT
	compte_carplane = function(id){
		var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
		alerty.confirm("Voulez-vous vraiment créer un compte dédié pour ce bénéficiaire ?", {
			title: "Creation de compte",
			cancelLabel : "Non",
			okLabel : "OUI, créer le compte",
		}, function(){
			loading()
			$.post(url, {action:"compte_carplane", id:id}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					deloading()
					iziToast.error({
						title: 'Erreur !',
						message: data.message,
					});
				}
			},"json");
		})
	}



	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	$("form#formImage").submit(function(){
		loading()
		var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
		var formData = new FormData($(this)[0]);
		formData.append('action', 'image');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			if (data.status) {
				location.reload();
			}else{
				deloading()
				iziToast.error({
					title: 'Erreur !',
					message: data.message,
				});
			}
		}, 'json');
		return false;
	})

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	$("form#formCartegrise").submit(function(){
		loading()
		var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
		var formData = new FormData($(this)[0]);
		formData.append('action', 'cartegrise');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			if (data.status) {
				location.reload();
			}else{
				deloading()
				iziToast.error({
					title: 'Erreur !',
					message: data.message,
				});
			}
		}, 'json');
		return false;
	})

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	$("form#formPiece").submit(function(){
		loading()
		var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
		var formData = new FormData($(this)[0]);
		formData.append('action', 'piece');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			if (data.status) {
				location.reload();
			}else{
				deloading()
				iziToast.error({
					title: 'Erreur !',
					message: data.message,
				});
			}
		}, 'json');
		return false;
	})

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $("form#formAssur").submit(function(){
    	loading()
    	var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
    	var formData = new FormData($(this)[0]);
    	formData.append('action', 'assurance');
    	$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
    		if (data.status) {
    			location.reload();
    		}else{
    			deloading()
    			iziToast.error({
    				title: 'Erreur !',
    				message: data.message,
    			});
    		}
    	}, 'json');
    	return false;
    })



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    
	// $("#modal-visite input[name=date_etablissement], #modal-visite input[name=started], #modal-visite input[name=finished]").datepicker({
	// 	format: "dd MM yyyy",
	// 	language: 'fr',
	// 	autoclose: true,
	// 	todayBtn: true,
	// 	// initialDate:  new Date(),
	// 	minuteStep: 30
	// });


	$("form#formVisite").submit(function(){
		loading()
		var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
		var formData = new FormData($(this)[0]);
		formData.append('action', 'visite');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			if (data.status) {
				location.reload();
			}else{
				deloading()
				iziToast.error({
					title: 'Erreur !',
					message: data.message,
				});
			}
		}, 'json');
		return false;
	})


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $("form#formEntretien").submit(function(){
    	loading()
    	var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
    	var formData = new FormData($(this)[0]);
    	formData.append('action', 'entretien');
    	$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
    		if (data.status) {
    			location.reload();
    		}else{
    			deloading()
    			iziToast.error({
    				title: 'Erreur !',
    				message: data.message,
    			});
    		}
    	}, 'json');
    	return false;
    })


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $("form#formSinistre").submit(function(){
    	loading()
    	var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
    	var formData = new FormData($(this)[0]);
    	formData.append('action', 'sinistre');
    	$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
    		if (data.status) {
    			location.reload();
    		}else{
    			deloading()
    			iziToast.error({
    				title: 'Erreur !',
    				message: data.message,
    			});
    		}
    	}, 'json');
    	return false;
    })


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$("form#formAffectation").submit(function(){
	loading()
	var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
	var formData = new FormData($(this)[0]);
	formData.append('action', 'affectation');
	$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
		if (data.status) {
			location.reload();
		}else{
			deloading()
			iziToast.error({
				title: 'Erreur !',
				message: data.message,
			});
		}
	}, 'json');
	return false;
})


	////////////////////////////////////////////////////////////////////
	//ACCESSOIRE ET EQUIPEMENT
	retirer = function(table, id){
		var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
		alerty.confirm("Voulez-vous vraiment retirer cet element ?", {
			title: "Retirer",
			cancelLabel : "Non",
			okLabel : "OUI, retirer",
		}, function(){
			loading()
			$.post(url, {action:"retirer", table:table, id:id}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					deloading()
					iziToast.error({
						title: 'Erreur !',
						message: data.message,
					});
				}
			},"json");
		})
	}


	// usure = function(table, id){
	// 	var url = "../../webapp/administration/modules/master/vehicule/ajax.php";
	// 	alerty.confirm("Voulez-vous vraiment declarer cet element comme <b>usé</b> ?", {
	// 		title: "Usure",
	// 		cancelLabel : "Non",
	// 		okLabel : "OUI, il est usé",
	// 	}, function(){
	// 		$.post(url, {action:"usure", table:table, id:id}, (data)=>{
	// 			if (data.status) {
	// 				window.location.reload()
	// 			}else{
	// 				iziToast.error({
	// 					title: 'Erreur !',
	// 					message: data.message,
	// 				});
	// 			}
	// 		},"json");
	// 	})
	// }

	///////////////////////////////////////////////////////////////////////////


	// $("table.spe").DataTable({
	// 	"language": {

	// 		"sProcessing":     "Traitement en cours...",
	// 		"sSearch":         "Rechercher&nbsp;:",
	// 		"sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
	// 		"sInfo":           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
	// 		"sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
	// 		"sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
	// 		"sInfoPostFix":    "",
	// 		"sLoadingRecords": "Chargement en cours...",
	// 		"sZeroRecords":    "Aucune donn&eacute;e disponible dans le tableau",
	// 		"sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
	// 		"oPaginate": {
	// 			"sFirst":      "Premier",
	// 			"sPrevious":   "Pr&eacute;c&eacute;dent",
	// 			"sNext":       "Suivant",
	// 			"sLast":       "Dernier"
	// 		},
	// 		"oAria": {
	// 			"sSortAscending":  ": activer pour trier la colonne par ordre croissant",
	// 			"sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
	// 		}
	// 	},
	// 	"iDisplayLength": 10,
	// 	'ordering'    : true,
	// 	'responsive': true,
	// 	"pagination": true,
	// 	"searching": true,
	// })
	
})