

$(function(){


	$("#inputSearch").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$(".equipements").filter(function() {
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


	$("form#formApprovisonnement").submit(function(event) {
		var formData = new FormData($(this)[0]);
		var url = "../../webapp/administration/modules/parametres/equipements/ajax.php";
		alerty.confirm("Voulez-vous approvisionner cet equipement ?", {
			title: "Approvisionnement de stock",
			cancelLabel : "Non",
			okLabel : "OUI, approvisionner",
		}, function(){
			formData.append('action', "approvisionner")
			$.post({url:url, data:formData, processData:false, contentType:false}, (data)=>{
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
		return false;
	});


	// $("#modal-equipement").modal(function(){
	// 	if ($("#modal-equipement input[name=id]").val() == "") {
	// 		$("#modal-equipement input[name=stock]").show()
	// 	}else{
	// 		$("#modal-equipement input[name=stock]").hide()
	// 	}
	// })
	
})