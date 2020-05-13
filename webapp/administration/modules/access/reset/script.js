

$(function(){

    $("form#resetForm").submit(function(event) {
        Loader.start();
        var url = "../../webapp/administration/modules/access/reset/ajax.php";
        var formData = new FormData($(this)[0]);
        formData.append('action', 'resetPassword');
        $.post({url:url, data:formData, processData:false, contentType:false}, function(data) {
            //TODO faire un reloader
            if (data.status) {
                window.location.href = data.url;
            }else{
                Alerter.error('Erreur !', data.message);
            }
            //TODO faire un dereloader
        }, 'json');
        return false;
    });

})