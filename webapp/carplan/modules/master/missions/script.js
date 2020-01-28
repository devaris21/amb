
$(function(){

	$("#inputSearch").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("table tbody tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});



	terminer = function(id){
		alerty.confirm("Cette mission est-elle vraiment terminée ?", {
			title: "Mission terminée",
			cancelLabel : "Non",
			okLabel : "OUI, terminer",
		}, function(){
			var url = "../../webapp/administration/modules/exterieurs/missions/ajax.php";
			$.post(url, {action:"terminer", id:id}, (data)=>{
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