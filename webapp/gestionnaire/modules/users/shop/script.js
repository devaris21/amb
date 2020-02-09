    $(document).ready(function(){

    	$(document.body).on("change","input[name=typeproduit]",function(e){
    		id = $(this).attr("id");
    		if ($(this).is(":checked")) {
    			$("div."+id).fadeIn(500);
    		}else{
    			$("div."+id).fadeOut(500);
    		}
    	});


    	$("#top-search, #rechercher").on("keyup", function() {
    		var value = $(this).val().toLowerCase();
    		$("div.produit").filter(function() {
    			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    		});
    	});

    });