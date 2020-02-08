
$(function(){

	// Initialisation des plugins
	$("select.select2").select2();

	$("input[type=checkbox]").change(function(event) {
		if ($(this).is(":checked")) {
			$(this).parent("label").css("color", "orangered");
		}else{
			$(this).parent("label").css("color", "#888");
		}
	});
	$("input[type=radio]").change(function(event) {
		name = $(this).attr("name")
		$("input[name="+name+"]").parent("label").css("color", "#888");
		$(this).parent("label").css("color", "orangered");
	});

	//
	$('body').on("click", "button.btn_image", function(event) {
		$(this).prev("input[type=file]").trigger('click');
	});
	$('body').on("change", ".modal input[type=file]", function(e) {
		var src = URL.createObjectURL(e.target.files[0])
		$(this).prev("img.logo").attr('src', src);
	});


	$(".btn_modal").click(function(event) {
		$("div.modal form").trigger('reset')
		$("div.modal input[type=hidden][name=id]").val('')
		$("div.modal .unmodified").show();
	});


	modal = function(modal){
		$(modal).modal("show")
	}



    //mettre en session par ajax
	    session = function(name, value){
	    	url = "../../composants/dist/traitements/traitement.php";
	    	$.post(url, {action:"session", name:name, value:value}, (data)=>{

	    	});
	    }


//mettre en session par ajax
getSession = function(name){
	url = "../../composants/dist/traitements/traitement.php";
	$.post(url, {action:"getSession", name:name}, (data)=>{

	});
}



    //concatener a 0
    concate0 = function(nom){
    	if (nom < 10) {
    		return "0"+nom;
    	}else{
    		return nom;
    	}
    }

    //Format date
    formatDate = function(ladate){
    	if (ladate == null) {
    		ladate = new Date(ladate);
    	}
    	if (moment(ladate).isValid()) {
    		val = moment(ladate);
    		newdate = val.year()+"-"+concate0(val.month()+1)+"-"+concate0(val.date())+" "+concate0(val.hour())+":"+concate0(val.minute())+":"+concate0(val.second());
    		return newdate;
    	}else{
    		return ladate = new Date();
    	}
    }

    $("input[uppercase]").keyup(function(){
    	alert(this.val())
    	this.val(this.val().toUpperCase());
    })
});