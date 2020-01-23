$(function(){

	// $("a[=]").click();
	// $("a[logo-theme=theme4]").click();
	// $("nav.pcoded-navbar").attr('navbar-theme', 'themelight1');
	// $("div.navbar-logo").attr('logo-theme', 'theme4');
	// $('#styleSelector').hide()




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
		formData.append('action', "save-shamman-form");
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