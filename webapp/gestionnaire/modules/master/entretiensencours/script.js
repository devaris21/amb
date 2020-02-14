

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


	validerEntretien = function(id){
		var url = "../../webapp/gestionnaire/modules/master/entretiensencours/ajax.php";
		alerty.confirm("Voulez-vous vraiment valider cet entretien comme étant terminé ?", {
			title: "Entretein terminé ",
			cancelLabel : "Non",
			okLabel : "OUI, approuver",
		}, function(){
			$.post(url, {action:"approuver", id:id}, (data)=>{
				if (data.status) {
					window.location.reload();
				}else{
					 Alerter.error('Erreur !', data.message);
				}
			},"json");
		})
	}


	annulerEntretien = function(id){
		var url = "../../webapp/gestionnaire/modules/master/entretiensencours/ajax.php";
		alerty.confirm("Voulez-vous vraiment refuser cette demande d'entretien pour ce véhicule ?", {
			title: "Annulation de la demande",
			cancelLabel : "Non",
			okLabel : "OUI, refuser",
		}, function(){
			$.post(url, {action:"refuser", id:id}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					 Alerter.error('Erreur !', data.message);
				}
			},"json");
		})
	}



})