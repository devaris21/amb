$(document).ready(function(){

	$("#top-search").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("table.table-chauffeurs tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});

	afficherChauffeur = function(id){
		var url = "../../webapp/gestionnaire/modules/users/chauffeurs/ajax.php";
		$.post(url, {action:"afficher", id:id}, (data)=>{
			Loader.start();
			setTimeout(function(){
				Loader.stop();
				$("div.affichage").html(data)
			}, 500);
		},"html");
	}

	$("table.table-chauffeurs tr").click(function(event) {
		$("table.table-chauffeurs tr").removeClass('selected')
		$(this).addClass('selected')
	});

});