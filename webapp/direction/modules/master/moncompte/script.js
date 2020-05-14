$(function(){

$("form#formPassword").submit(function(event) {
	Loader.start();
	var url = "../../webapp/direction/modules/master/moncompte/ajax.php";
	var formData = new FormData($(this)[0]);
	formData.append('action', 'password');
	$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
		if (data.status) {
			window.location.reload()
		}else{
			Alerter.error("Erreur !", data.message);
		}
	}, 'json');
	return false;
});


$("form#formLogin").submit(function(event) {
	Loader.start();
	var url = "../../webapp/direction/modules/master/moncompte/ajax.php";
	var formData = new FormData($(this)[0]);
	formData.append('action', 'login');
	$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
		if (data.status) {
			window.location.reload()
		}else{
			Alerter.error("Erreur !", data.message);
		}
	}, 'json');
	return false;
});



	$("form#formImage").submit(function(){
		Loader.start();
	var url = "../../webapp/direction/modules/master/moncompte/ajax.php";
		var formData = new FormData($(this)[0]);
		formData.append('action', 'image');
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			if (data.status) {
				location.reload();
			}else{
				Alerter.error("Erreur !", data.message);
			}
		}, 'json');
		return false;
	})

})