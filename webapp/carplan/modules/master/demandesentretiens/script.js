

$(function(){


		$("#inputSearch").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("table tbody tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});


	approuver = function(id){
		var url = "../../webapp/administration/modules/fiches/demandeentretien/ajax.php";
		alerty.confirm("Voulez-vous vraiment approuver cette demande d'entretien pour ce véhicule ?", {
			title: "Annulation de demande",
			cancelLabel : "Non",
			okLabel : "OUI, approuver",
		}, function(){
			$.post(url, {action:"approuver", id:id}, (data)=>{
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


	refuser = function(id){
		var url = "../../webapp/administration/modules/fiches/demandeentretien/ajax.php";
		alerty.confirm("Voulez-vous vraiment refuser cette demande d'entretien pour ce véhicule ?", {
			title: "Annulation de demande",
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