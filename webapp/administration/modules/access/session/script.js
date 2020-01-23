

$(function(){

        $("form#msform").submit(function(event) {
        var url = "../../webapp/administration/modules/access/session/ajax.php";
        var formData = new FormData($(this)[0]);
        formData.append('action', 'session');
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

})