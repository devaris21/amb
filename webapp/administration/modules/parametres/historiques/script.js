
$(function(){
	$("input[type=date]").change(function(){
		var url = "../../webapp/administration/modules/parametres/historiques/ajax.php";
		var formData = new FormData();
		formData.append("date1", $("input[name=date1]").val());
		formData.append("date2", $("input[name=date2]").val());
		formData.append("action", "historiques");
		$.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
			$("tbody#historique").html(data)
		}, "html");
	})


	$("input[name=date1]").change()


	var ias = new InfiniteAjaxScroll('tbody#historique', {
		item: 'tbody#historique tr',
		next: '.next',
		pagination: '.pagination',
		//spinner: '.spinner'
	});

})