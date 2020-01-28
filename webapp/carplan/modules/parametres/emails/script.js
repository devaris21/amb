

$(function(){

	$("#inputSearch").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("table tbody tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});

	$('body').on("click", "button.btn_image", function(event) {
		$(this).prev("input[type=file]").trigger('click');
	});

	$('body').on("change", ".modal input[type=file]", function(e) {
		var src = URL.createObjectURL(e.target.files[0])
		$(this).prev("img.logo").attr('src', src);
	});



	stock = function(id){
		var url = "../../webapp/administration/modules/parametres/equipements/ajax.php";
		alerty.prompt("Voulez-vous changer la quantité en stock de cet equipement ?", {
			title: "Modification du stock",
			inputType : "number",
			cancelLabel : "Non",
			okLabel : "OUI, Changer",
		}, function(stock){
			$.post(url, {action:"stock", id:id, stock:stock}, (data)=>{
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