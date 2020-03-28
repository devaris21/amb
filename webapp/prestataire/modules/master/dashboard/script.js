$(function(){

	$(".tabs-container li:nth-child(1) a.nav-link").addClass('active')
	ele = $("#parcs div.tab-pane:first").addClass('active')
	
	$("#top-search").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("div.vehicule").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});



	$("form#formPassword").submit(function(event) {
		Loader.start();
		var url = "../../webapp/prestataire/modules/master/dashboard/ajax.php";
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
		var url = "../../webapp/prestataire/modules/master/dashboard/ajax.php";
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
		var url = "../../webapp/prestataire/modules/master/dashboard/ajax.php";
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