$(function(){

	$(".tabs-container li:nth-child(1) a.nav-link").addClass('active')
	ele = $("#parcs div.tab-pane:first").addClass('active')
	
	$("#inputSearch").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("table tbody tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	
})