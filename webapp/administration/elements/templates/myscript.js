    $(function(){
    	var modul = "<?= $this->getModule() ?>"
    	var url = "<?= $this->getPage() ?>"

    	if (url == "parcauto" || url == "parcauto1" || url == "parcauto2" || url == "vehicule") {
    		url = "parcauto";
    	}

    	if (url == "memorandum" || url == "memorandums") {
    		url = "memorandums";
    	}

    	if (url == "entretiens") {
    		url = "entr<?= $this->getId() ?>"
    	}
    	$("nav ul.pcoded-item li").each(function(index, el) {
    		if ($(this).attr("id") == url){
    			$(this).addClass("activev")
    			$(this).parent("ul.pcoded-submenu").parent("li.pcoded-hasmenu").addClass("active pcoded-trigger")
    		}
    	});

    	$("li.section").click(function(event) {
    		$("li.section").removeClass('activel')
    		$(this).addClass("activel")
    		$("nav.pcoded-navbar").hide(500);
    		$("nav#nav-"+$(this).attr("id")).show(800);

    	});
    	$("li.section").each(function(index, el) {
    		if ($(this).attr("id") == modul){
    			$(this).addClass("activel")
    			$("nav.pcoded-navbar").hide();
    			$("nav#nav-"+$(this).attr("id")).show();
    		}
    	});

    	modal = function(modal){
    		$(modal).modal("show")
    	}




    	if ('matchMedia' in window) {
    // Chrome, Firefox, and IE 10 support mediaMatch listeners
    window.matchMedia('print').addListener(function(media) {
    	if (media.matches) {
    		beforePrint();
    	} else {
            // Fires immediately, so wait for the first mouse movement
            $(document).one('mouseover', afterPrint);
        }
    });
} else {
    // IE and Firefox fire before/after events
    $(window).on('beforeprint', beforePrint);
    $(window).on('afterprint', afterPrint);
}

function beforePrint() {
	$("i#print").click()
}

function afterPrint() {
	$("i#print").click()
}



$("input#inputSearch").keyup(function(event) {
	/* Act on the event */
});


$("a#btn-deconnexion").click(function(event) {
	alerty.confirm("Voulez-vous vraiment vous deconnecter ???", {
		title: "Deconnexion",
		cancelLabel : "Non",
		okLabel : "OUI, me deconnecter",
	}, function(){
		window.location.href = "/access/logout";
	})
});



	//Date range picker with time picker
	$('#modal-note #datetimepickernote').datetimepicker({
		language:  'fr',
		weekStart: 1,
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1
	})

	//valider la rervation maintenant maintenant
	$("#formNote").submit(function(){
		var url = "../../includes/js/traitement.php";
		var formData = new FormData($(this)[0]);
		val = $('#datetimepickernote').data("datetimepicker").viewDate;
		formData.append('finished', formatDate(val));
		formData.append('classname', "note");
		formData.append('action', "save-formShamman");
		console.log(val);
		$.post({url:url, data:formData, contentType: false, processData: false}, function(data){
			if (data.status) {
				window.location.reload();
			}else{
				iziToast.error({
					title: 'Erreur !',
					message: data.message,
				});
			}
		},'json')
		return false;
	})




	horloge = function(){
		tabMois = ["Janvier", "Février", "Mars","Avril","Mai","Juin", "Juillet", "Août","Septembre","Octobre","Novembre", "Décembre"];
		tabSemaine = ["Dimanche", "Lundi", "Mardi", "Mercredi","jeudi","Vendredi","Samedi"];

		ladate = new Date();
		j = ladate.getDay();
		jj = concate0(ladate.getDate());
		MM = concate0(ladate.getMonth());
		yy = ladate.getFullYear();
		hh = concate0(ladate.getHours());
		mm = concate0(ladate.getMinutes());
		ss = concate0(ladate.getSeconds());

		jour = tabSemaine[parseInt(j)];
		MM = tabMois[parseInt(MM)];

		$("#heure_actu").html(hh+':'+mm+':'+ss)
		$("#date_actu").html(jour+' '+jj+' '+MM+' '+yy)
	}

	setInterval(()=>{horloge()}, 1000);

})