

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




	approuver = function(id){
		alerty.confirm("Voulez-vous vraiment approuver cette demmande de véhicule ?", {
			title: "Approuver la demande",
			cancelLabel : "Non",
			okLabel : "OUI, approuver",
		}, function(){
			Loader.start();
			var url = "../../webapp/direction/modules/master/demandevehicules/ajax.php";
			$.post(url, {action:"approuver", id:id}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					Alerter.error("Erreur !", data.message);
				}
			},"json");
		})
	}



	annuler = function(id){
		alerty.confirm("Voulez-vous vraiment refuser cette demmande de véhicule ?", {
			title: "Refuser la demande",
			cancelLabel : "Non",
			okLabel : "OUI, refuser",
		}, function(){
			alerty.prompt("Pour quel motif voulez-vous refuser la demande", {
				title: 'Motif d\'annulation !',
				inputType : "text",
				cancelLabel : "Annuler",
				okLabel : "Refuser la demande"
			}, function(comment){
				Loader.start();
				var url = "../../webapp/direction/modules/master/demandevehicules/ajax.php";
				$.post(url, {action:"refuser", id:id, comment:comment}, (data)=>{
					if (data.status) {
						window.location.resload()
					}else{
						Alerter.error("Erreur !", data.message);
					}
				},"json");
			})
		})
	}


})


