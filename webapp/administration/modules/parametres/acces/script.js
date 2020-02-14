
$(function(){

	    $("form#formPass").submit(function(event) {
        var url = "../../webapp/flotte/modules/extra/parametres/ajax.php";
        var formData = new FormData($(this)[0]);
        formData.append('action', 'password');
        $.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
            if (data.status) {
                window.location.reload()
            }else{
                iziToast.error({
                    title: 'Erreur !',
                    message: data.message,
                });
            }
        }, 'json');
        return false;
    });


    $("form#formLogin").submit(function(event) {
        var url = "../../webapp/flotte/modules/extra/parametres/ajax.php";
        var formData = new FormData($(this)[0]);
        formData.append('action', 'login');
        $.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
            if (data.status) {
                window.location.reload()
            }else{
                iziToast.error({
                    title: 'Erreur !',
                    message: data.message,
                });
            }
        }, 'json');
        return false;
    });



    $("form#formLogo").submit(function(event) {
        var url = "../../webapp/flotte/modules/extra/parametres/ajax.php";
        var formData = new FormData($(this)[0]);
        formData.append('action', 'photo');
        $.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
            if (data.status) {
                window.location.reload()
            }else{
                iziToast.error({
                    title: 'Erreur !',
                    message: data.message,
                });
            }
        }, 'json');
        return false;
    });


})