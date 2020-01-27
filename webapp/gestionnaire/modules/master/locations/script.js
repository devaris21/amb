

$(function(){

	$("form#formVehicule").submit(function(event) {
		var url = "../../webapp/administration/modules/exterieurs/locations/ajax.php";
		var formData = new FormData($(this)[0]);
		formData.append('action', 'vehicule');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			$("form#formLocation tbody").html(data)
			$("#modal-vehiculep").modal("hide")
		}, 'html');
		return false;
	});

	supVehicule = function(id){
		var url = "../../webapp/administration/modules/exterieurs/locations/ajax.php";
		var formData = new FormData();
		formData.append('id', id);
		formData.append('action', 'supVehicule');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			$("form#formLocation tbody").html(data)
		}, 'html');
	}



	$("form#formLocation").submit(function(event) {
		alerty.confirm("Voulez-vous vraiment valider cette location de véhicule ?", {
			title: "Locations de véhicules",
			cancelLabel : "Non",
			okLabel : "OUI,  valider",
		}, function(){
			var url = "../../webapp/administration/modules/exterieurs/locations/ajax.php";
			var formData = new FormData($(this)[0]);
			formData.append('action', 'location');
			$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
				if (data.status) {
					location.reload();
				}else{
					iziToast.error({
						title: 'Erreur !',
						message: data.message,
					});
				}
			}, 'json');
			return false;
		})

	});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$("#modal-vehiculep .vehicule").click(function(event) {
	$(this).toggleClass("activer");
});



$("form#formVehiculep").submit(function(event) {
	var url = "../../webapp/administration/modules/exterieurs/locations/ajax.php";
	var tableau = new Array();
	$("#modal-vehiculep .vehicule").each(function(){
		if ($(this).hasClass('activer')) {				
			tableau.push($(this).attr('id'));
		}
	})
	session("vehiculesp", tableau);
	$("#modal-vehiculep").modal("hide")
	return false;
});


$("form#formPret").submit(function(event) {
	var formData = new FormData($(this)[0]);
	alerty.confirm("Voulez-vous vraiment valider cet pret de véhicule ?", {
		title: "Pret de véhicules",
		cancelLabel : "Non",
		okLabel : "OUI,  valider",
	}, function(){
		var url = "../../webapp/administration/modules/exterieurs/locations/ajax.php";
		formData.append('action', 'pret');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			if (data.status) {
				location.reload();
			}else{
				iziToast.error({
					title: 'Erreur !',
					message: data.message,
				});
			}
		}, 'json');
	})
	return false;
});


})