    $(document).ready(function(){
    	$('.footable').footable();
    	$('.footable2').footable();
    	
    	$(document.body).on("click",".client-link",function(e){
    		e.preventDefault()
    		$(".selected .tab-pane").removeClass('active');
    		$($(this).attr('href')).addClass("active");
    	});

    });