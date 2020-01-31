

$(function(){

	  // When the window has finished loading google map
        // google.maps.event.addDomListener(window, 'load', init);

        // function init() {
        //     // Options for Google map
        //     // More info see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        //     var mapOptions1 = {
        //         zoom: 11,
        //         center: new google.maps.LatLng(40.6700, -73.9400),
        //         // Style for Google Maps
        //         styles: [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}]
        //     };

        //     var mapOptions2 = {
        //         zoom: 11,
        //         center: new google.maps.LatLng(40.6700, -73.9400),
        //         // Style for Google Maps
        //         styles: [{"featureType":"all","elementType":"all","stylers":[{"invert_lightness":true},{"saturation":10},{"lightness":30},{"gamma":0.5},{"hue":"#435158"}]}]
        //     };

        //     var mapOptions3 = {
        //         center: new google.maps.LatLng(36.964645, -122.01523),
        //         zoom: 18,
        //         mapTypeId: google.maps.MapTypeId.SATELLITE,
        //         // Style for Google Maps
        //         styles: [{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#fffffa"}]},{"featureType":"water","stylers":[{"lightness":50}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"lightness":40}]}]
        //     };

        //     var mapOptions4 = {
        //         zoom: 11,
        //         center: new google.maps.LatLng(40.6700, -73.9400),
        //         // Style for Google Maps
        //         styles: [{"stylers":[{"hue":"#18a689"},{"visibility":"on"},{"invert_lightness":true},{"saturation":40},{"lightness":10}]}]
        //     };

        //     var fenway = new google.maps.LatLng(42.345573, -71.098326);
        //     var mapOptions5 = {
        //         zoom: 14,
        //         center: fenway,
        //         // Style for Google Maps
        //         styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
        //     };

        //     var panoramaOptions = {
        //         position: fenway,
        //         pov: {
        //             heading: 10,
        //             pitch: 10
        //         }
        //     };
        //     var panorama = new google.maps.StreetViewPanorama(document.getElementById('pano'), panoramaOptions);

        //     // Get all html elements for map
        //     var mapElement1 = document.getElementById('map1');
        //     var mapElement2 = document.getElementById('map2');
        //     var mapElement3 = document.getElementById('map3');
        //     var mapElement4 = document.getElementById('map4');

        //     // Create the Google Map using elements
        //     var map1 = new google.maps.Map(mapElement1, mapOptions1);
        //     var map2 = new google.maps.Map(mapElement2, mapOptions2);
        //     var map3 = new google.maps.Map(mapElement3, mapOptions3);
        //     var map4 = new google.maps.Map(mapElement4, mapOptions4);
        // }



        /////////////////////////////////////////////////////////////////////////////////////////////////

	$("table tr").click(function(event) {
		$("table tr").removeClass('selected')
		$(this).addClass('selected')
	});


	src = function(categorie, dossier, id){
		var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
		$.post(url, {action: dossier, dossier:dossier, id:id}, function(data) {
			$("div.affichage#"+categorie).html(data);
		}, "html");
	}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


reaffecter = function(id){
	var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
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
				Loader.start();
				$.post(url, {action:"reaffectation", id:id, ladate:ladate, password:password}, (data)=>{
					if (data.status) {
						window.location.reload()
					}else{
						Alerter.error('Erreur !', data.message);
					}
				},"json");
			})
		})
	})
}


indisponible = function(){
	var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
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
			Loader.start()
			$.post(url, {action:"indisponible", password:password}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					Alerter.error('Erreur !', data.message);
				}
			},"json");
		})
	})
}



disponible = function(){
	var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
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
			Loader.start()
			$.post(url, {action:"disponible", password:password}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					Alerter.error('Erreur !', data.message);
				}
			},"json");
		})
	})
}



out = function(){
	var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
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
			Loader.start()
			$.post(url, {action:"out", password:password}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					Alerter.error('Erreur !', data.message);
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
		var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
		formData.append('action', 'pret');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			Loader.start()
			if (data.status) {
				location.reload();
			}else{
				Alerter.error('Erreur !', data.message);
			}
		}, 'json');
	})
	return false;
});



$("textarea[name=commentvehicule]").change(function(){
	Loader.start()
	var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
	var val = $(this).val()
	$.post(url, {action: "comment", val:val}, function(data) {
		if (data.status) {
			deLoader.start()
			alerty.toasts("Bloc-note du véhicule mis à jour !", 5000);
		}else{
			Alerter.error('Erreur !', data.message);
		}
	}, 'json');
})






	////////////////////////////////////////////////////////////////////
	//ACCESSOIRE ET EQUIPEMENT
	compte_carplane = function(id){
		var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
		alerty.confirm("Voulez-vous vraiment créer un compte dédié pour ce bénéficiaire ?", {
			title: "Creation de compte",
			cancelLabel : "Non",
			okLabel : "OUI, créer le compte",
		}, function(){
			Loader.start()
			$.post(url, {action:"compte_carplane", id:id}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					Alerter.error('Erreur !', data.message);
				}
			},"json");
		})
	}



	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	$("form#formImage").submit(function(){
		Loader.start()
		var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
		var formData = new FormData($(this)[0]);
		formData.append('action', 'image');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			if (data.status) {
				location.reload();
			}else{
				Alerter.error('Erreur !', data.message);
			}
		}, 'json');
		return false;
	})

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	$("form#formCartegrise").submit(function(){
		Loader.start()
		var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
		var formData = new FormData($(this)[0]);
		formData.append('action', 'cartegrise');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			if (data.status) {
				location.reload();
			}else{
				Alerter.error('Erreur !', data.message);
			}
		}, 'json');
		return false;
	})

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	$("form#formPiece").submit(function(){
		Loader.start()
		var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
		var formData = new FormData($(this)[0]);
		formData.append('action', 'piece');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			if (data.status) {
				location.reload();
			}else{
				Alerter.error('Erreur !', data.message);
			}
		}, 'json');
		return false;
	})

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $("form#formAssur").submit(function(){
    	Loader.start()
    	var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
    	var formData = new FormData($(this)[0]);
    	formData.append('action', 'assurance');
    	$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
    		if (data.status) {
    			location.reload();
    		}else{
    			Alerter.error('Erreur !', data.message);
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
		Loader.start()
		var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
		var formData = new FormData($(this)[0]);
		formData.append('action', 'visite');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			if (data.status) {
				location.reload();
			}else{
				Alerter.error('Erreur !', data.message);
			}
		}, 'json');
		return false;
	})


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $("form#formEntretien").submit(function(){
    	Loader.start()
    	var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
    	var formData = new FormData($(this)[0]);
    	formData.append('action', 'entretien');
    	$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
    		if (data.status) {
    			location.reload();
    		}else{
    			Alerter.error('Erreur !', data.message);
    		}
    	}, 'json');
    	return false;
    })


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $("form#formSinistre").submit(function(){
    	Loader.start()
    	var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
    	var formData = new FormData($(this)[0]);
    	formData.append('action', 'sinistre');
    	$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
    		if (data.status) {
    			location.reload();
    		}else{
    			Alerter.error('Erreur !', data.message);
    		}
    	}, 'json');
    	return false;
    })


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$("form#formAffectation").submit(function(){
	Loader.start()
	var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
	var formData = new FormData($(this)[0]);
	formData.append('action', 'affectation');
	$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
		if (data.status) {
			location.reload();
		}else{
			Alerter.error('Erreur !', data.message);
		}
	}, 'json');
	return false;
})


	////////////////////////////////////////////////////////////////////
	//ACCESSOIRE ET EQUIPEMENT
	retirer = function(table, id){
		var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
		alerty.confirm("Voulez-vous vraiment retirer cet element ?", {
			title: "Retirer",
			cancelLabel : "Non",
			okLabel : "OUI, retirer",
		}, function(){
			Loader.start()
			$.post(url, {action:"retirer", table:table, id:id}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					Alerter.error('Erreur !', data.message);
				}
			},"json");
		})
	}


	// usure = function(table, id){
	// 	var url = "../../webapp/gestionnaire/modules/master/vehicule/ajax.php";
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