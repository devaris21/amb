

$(function(){

    $("form#msform").submit(function(event) {
        var url = "../../webapp/administration/modules/access/reset/ajax.php";
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

})