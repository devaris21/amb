
$(function(){

 $("input[type=checkbox].onoffswitch-checkbox").change(function(event) {
        if($(this).is(":checked")){
            Loader.start()
            setTimeout(function(){
                Loader.stop()
                $(".table-suggestion tr").hide()
                $("tr.encours").fadeIn(400)
            }, 500);
        }else{
            $(".table-suggestion tr").fadeIn(400)
        }
    });

    $("#top-search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("table.table-suggestion tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });


    valider = function(id){
        var url = "../../webapp/administration/modules/parametres/suggestions/ajax.php";
        alerty.confirm("Voulez-vous vraiment valider ?", {
            title: "ok !",
            cancelLabel : "Non",
            okLabel : "OUI, accepter",
        }, function(){
            $.post(url, {action:"accepter", id:id}, (data)=>{
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
    }

})