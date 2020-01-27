

$(function(){

	
	$("#inputSearch").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$(".equipements").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	
})