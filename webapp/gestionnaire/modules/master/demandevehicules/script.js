

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

	$(".vehiculeSelect").click(function(){
		$(".vehiculeSelect").removeClass('selected');
			$(this).addClass('selected');
			session("vehicule", $(this).attr("id"));
	});


	$(".chauffeurSelect").click(function(){
		$(".chauffeurSelect").removeClass('selected');
			$(this).addClass('selected');
			session("chauffeur", $(this).attr("id"));
	});



	$("form#formValiderDemande").submit(function(event) {
		Loader.start()
		var url = "../../webapp/gestionnaire/modules/master/demandevehicules/ajax.php";
		var formdata = new FormData($(this)[0]);
		formdata.append('action', "demandevehicule");
		$.post({url:url, data:formdata, contentType:false, processData:false}, function(data){
			if (data.status) {
				window.location.reload();
			}else{
				Alerter.error('Erreur !', data.message);
			}
		}, 'json')
		return false;
	});



	annuler = function(id){
		alerty.confirm("Voulez-vous vraiment terminer cette demmande de véhicule ?", {
			title: "Annuler la demande",
			cancelLabel : "Non",
			okLabel : "OUI, annuler",
		}, function(){
			Loader.start();
			var url = "../../webapp/gestionnaire/modules/master/demandevehicules/ajax.php";
			$.post(url, {action:"annuler", id:id}, (data)=>{
				if (data.status) {
					window.location.reload()
				}else{
					Alerter.error("Erreur !", data.message);
				}
			},"json");
		})
	}


})