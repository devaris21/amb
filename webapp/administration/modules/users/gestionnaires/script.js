    $(document).ready(function(){

    	$("#top-search").on("keyup", function() {
    		var value = $(this).val().toLowerCase();
    		$(".center-version").filter(function() {
    			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    		});
    	});

    });