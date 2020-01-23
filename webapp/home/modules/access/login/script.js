

    $("form.login-form").submit(function(event) {
        var url = "../../webapp/home/modules/access/login/ajax.php";
        var formData = new FormData($(this)[0]);
        formData.append('action', 'connexion');
        $.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
            if (data.status) {
                window.location.href = data.url
            }else{
                iziToast.error({
                    title: 'Erreur !',
                    message: data.message,
                });
            }
        }, 'json');
        return false;
    });



    $("form#form-new").submit(function(event) {
        var url = "../../webapp/home/modules/access/login/ajax.php";
        var formData = new FormData($(this)[0]);
        formData.append('action', 'new');
        $.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
            if (data.status) {
                window.location.href = data.url;
            }else{
                iziToast.error({
                    title: 'Erreur !',
                    message: data.message,
                });
            }
        }, 'json');
        return false;
    });




    $("form#form-reset").submit(function(event) {
        var url = "../../webapp/home/modules/access/login/ajax.php";
        var formData = new FormData($(this)[0]);
        formData.append('action', 'reset');
        $.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
            $("div.loader").removeClass('hide');
            if (data.status) {
                window.location.href = data.url;
            }else{
                iziToast.error({
                    title: 'Erreur !',
                    message: data.message,
                });
            }
            $("div.loader").addClass('hide');
        }, 'json');
        return false;
    });
