

$(function(){
	$("div.fini").hide()

	$("input[type=checkbox]").change(function(event) {
		if($(this).is(":checked")){
			Loader.start()
			setTimeout(function(){
				Loader.stop()
				$("div.fini").fadeIn(400)
			}, 500);
		}else{
			$("div.fini").fadeOut(400)
		}
	});

	$("#top-search").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("div.vote-item").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});


	validerDemandeEntretien = function(id){
		var url = "../../webapp/gestionnaire/modules/master/demandeentretiens/ajax.php";
		alerty.confirm("Voulez-vous vraiment valider cette demande d'entretien pour ce véhicule ?", {
			title: "Validation de la demande",
			cancelLabel : "Non",
			okLabel : "OUI, approuver",
		}, function(){
			$.post(url, {action:"approuver", id:id}, (data)=>{
				if (data.status) {
					Alerter.success("Demande approuvée", "La validation de la demande s'est effectué avec succes !");
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
		var url = "../../webapp/gestionnaire/modules/master/demandeentretiens/ajax.php";
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



	annulerDemandeEntretien = function(id){
		var url = "../../webapp/gestionnaire/modules/master/demandeentretiens/ajax.php";
		alerty.confirm("Voulez-vous vraiment refuser cette demande d'entretien pour ce véhicule ?", {
			title: "Annulation de la demande",
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