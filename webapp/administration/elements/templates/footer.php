    <?php require '../../composants/dist/js/plugins_js.php'; ?>

    <!-- Required Jquery -->
    <!-- <script type="text/javascript" src="../../webapp/administration/assets/components/bower_components/jquery/js/jquery.min.js"></script> -->
    <script type="text/javascript" src="../../webapp/administration/assets/components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../../webapp/administration/assets/components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../../webapp/administration/assets/components/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../../webapp/administration/assets/js/script.js"></script>

    <!-- modernizr js -->
    <script type="text/javascript" src="../../webapp/administration/assets/components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="../../webapp/administration/assets/components/modernizr/js/css-scrollbars.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../../webapp/administration/assets/components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- amchart js -->
<!--     <script src="../../webapp/administration/assets/components/amchart/amcharts.js"></script>
    <script src="../../webapp/administration/assets/components/amchart/serial.js"></script>
    <script src="../../webapp/administration/assets/components/amchart/light.js"></script> -->

   <!--  
    <script src="../../webapp/administration/assets/components/multi-step-sign-up/js/main.js"></script>
-->


<!-- Custom js -->
<script type="text/javascript" src="../../webapp/administration/assets/js/SmoothScroll.js"></script>
<script src="../../webapp/administration/assets/js/pcoded.min.js"></script>
<script src="../../webapp/administration/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../webapp/administration/assets/js/vartical-layout.min.js"></script>



<script type="text/javascript" src="../../webapp/administration/assets/js/common-pages.js"></script>


<script src="../../webapp/administration/elements/templates/myscript.js"></script>


<script type="text/javascript">
    $(function(){
        var modul = "<?= $this->get_module() ?>"
        var url = "<?= $this->get_page() ?>"

        if (url == "parcauto" || url == "parcauto1" || url == "parcauto2" || url == "vehicule") {
            url = "parcauto";
        }

        if (url == "memorandum" || url == "memorandums") {
            url = "memorandums";
        }

        if (url == "entretiens") {
            url = "entr<?= $this->get_id() ?>"
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
})
</script>

<style type="text/css">
    li.activev{
        font-weight: bold;
        background-color: rgba(255, 119, 0,0.4) !important;
        color: #ffffff;
    }

    .activel{
        background-color: rgba(255, 119, 0,0.4);
    }

    li.section{
        margin: auto 0%;
    }

    li.section:hover{
        background-color: rgba(240, 147, 43,0.2);
    }

    .hide{
        display: none;
    }
</style>



<?php require("../../webapp/administration/elements/modals/modal-client.php") ?>
<?php require("../../webapp/administration/elements/modals/modal-chauffeur.php") ?>
<?php require("../../webapp/administration/elements/modals/modal-utilisateur.php") ?>
<?php require("../../webapp/administration/elements/modals/modal-equipement.php") ?>
<?php require("../../webapp/administration/elements/modals/modal-accessoire.php") ?>
<?php require("../../webapp/administration/elements/modals/modal-prestataire.php") ?>
<?php require("../../webapp/administration/elements/modals/modal_sinistres.php") ?>
