
$(function(){

	changer = function(id){
        var url = "../../webapp/administration/modules/parametres/gestionnaires/ajax.php";
		alerty.confirm("Voulez-vous vraiment changer le niveau d'administration de ce gestionnaire ?", {
			title: "Niveau d'administration",
			cancelLabel : "Non",
			okLabel : "OUI, changer",
		}, function(){
			alerty.prompt("Entrer votre mot de passe pour confirmer l'opération !", {
				title: 'Récupération du mot de passe !',
				inputType : "password",
				cancelLabel : "Annuler",
				okLabel : "Mot de passe"
			}, function(password){
				$.post(url, {action:"changer", id:id, password:password}, (data)=>{
					if (data.status) {
						window.location.reload()
					}else{
						iziToast.error({
							title: 'Erreur !',
							message: data.message,
						});
					}
				},"json");
			})
		})
	}

})