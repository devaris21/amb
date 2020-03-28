
$(function(){

	$("#inputSearch").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("table tbody tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});



	annuler = function(id){
		alerty.confirm("Voulez-vous vraiment terminer cette mission ?", {
			title: "Annuler la mission",
			cancelLabel : "Non",
			okLabel : "OUI, annuler",
		}, function(){
			Loader.start();
			var url = "../../webapp/gestionnaire/modules/master/missions/ajax.php";
			$.post(url, {action:"annuler", id:id}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					Alerter.error("Erreur !", data.message);
				}
			},"json");
		})
	}


	terminer = function(id){
		alerty.confirm("Cette mission est-elle vraiment terminée ?", {
			title: "Mission terminée",
			cancelLabel : "Non",
			okLabel : "OUI, terminer",
		}, function(){
			Loader.start();
			var url = "../../webapp/gestionnaire/modules/master/missions/ajax.php";
			$.post(url, {action:"terminer", id:id}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					Alerter.error("Erreur !", data.message);
				}
			},"json");
		})
	}

})