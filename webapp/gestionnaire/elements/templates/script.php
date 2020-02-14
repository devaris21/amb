    <!-- Mainly scripts -->

    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/jquery-3.1.1.min.js") ?>"></script>
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/popper.min.js") ?>"></script>
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/bootstrap.js") ?>"></script>
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/plugins/metisMenu/jquery.metisMenu.js") ?>"></script>
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/plugins/slimscroll/jquery.slimscroll.min.js") ?>"></script>

    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/inspinia.js") ?>"></script>
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/plugins/pace/pace.min.js") ?>"></script>
    <!-- ChartJS-->
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/plugins/chartJs/Chart.min.js") ?>"></script>
    <!-- Toastr -->
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/plugins/toastr/toastr.min.js") ?>"></script>   <!-- Footable -->
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/plugins/footable/footable.all.min.js") ?>"></script>
    <!-- IonRangeSlider -->
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/plugins/ionRangeSlider/ion.rangeSlider.min.js") ?>"></script>
    <!-- Idle Timer plugin -->
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/js/plugins/idle-timer/idle-timer.min.js") ?>"></script>

    <!-- iCheck -->
    <script src="<?= $this->rootPath("composants/dist/js/plugins/iCheck/icheck.min.js") ?>"></script>
    <!-- Select2 -->
    <script src="<?= $this->rootPath("composants/dist/js/plugins/select2/dist/js/select2.js") ?>"></script>
    <script src="<?= $this->rootPath("composants/dist/js/plugins/alerty/alerty.min.js") ?>"></script>

    <!-- script pour mon alerter.js -->
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/shamman/loader.js") ?>"></script>
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/shamman/alerter.js") ?>"></script>
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/shamman/general.js") ?>"></script>
    <script type="text/javascript" src="<?= $this->rootPath("composants/dist/shamman/traitement.js") ?>"></script>

    
    <!-- script pour chaque page généré -->
    <script type="text/javascript" src="<?= $this->relativePath("script.js") ?>"></script>



    <script>
        $(function(){
            //sauvegarde de la page en cours
            sessionStorage.setItem("page", "<?= $this->getUrl() ?>");


        // selecteur item de page
        var url = "<?= $this->getPage() ?>"
        if (url == "parcauto" || url == "vehicule") {
            url = "parcauto";
        }
        if (url == "prestataires" || url == "prestataire") {
            url = "prestataires";
        }
        $("nav ul.metismenu li").removeClass('active');
        $("nav ul.metismenu li").each(function(index, el) {
            if ($(this).attr("id") == url){
                $(this).addClass("active")
                $(this).parent("ul.nav-second-level").addClass("in ").attr("aria-expanded", "true");
                $(this).parent("ul.nav-second-level").parent("li").addClass("active");
            }
        });



        var modul = "<?= $this->getModule() ?>"
        $("li.section").click(function(event) {
            $("li.section").removeClass('active')
            $(this).addClass("active")
        });
        $("li.section").each(function(index, el) {
            if ($(this).attr("id") == modul){
                $(this).click()
                $(".navbar-static-side .tabs-container .tab-pane[data-id="+modul+"]").addClass('active');
            }
        });
    });
</script>