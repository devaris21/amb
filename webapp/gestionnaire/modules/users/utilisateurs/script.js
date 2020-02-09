    $(document).ready(function(){

    	$(".tabs-container li:nth-child(1) a.nav-link").addClass('active')
    	$("#deps div.tab-pane:first").addClass('active');


    	$(document.body).on("click",".client-link",function(e){
    		e.preventDefault()
    		$(".selected .tab-pane").removeClass('active');
    		$($(this).attr('href')).addClass("active");
    	});

    });