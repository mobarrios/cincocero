<!DOCTYPE html>
<html lang="es">
<base href="{{asset('')}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>{nc} nav_coder</title>

    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="assets/angle/vendor/fontawesome/css/font-awesome.min.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="assets/angle/vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="assets/angle/vendor/animate.css/animate.min.css">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="assets/angle/vendor/whirl/dist/whirl.css">
    <!-- =============== PAGE VENDOR STYLES ===============-->


    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="assets/angle/css/bootstrap.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="assets/angle/css/app.css" id="maincss">
    <link href="assets/angle/css/theme-b.css" rel="stylesheet" id="autoloaded-stylesheet">

    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dataTables.fontAwesome.css" rel="stylesheet">

    <link href="assets/inspinia/css/plugins/datapicker/datepicker3.css" rel="stylesheet" type="text/css" media="all" >



    @yield('css')

</head>

<body>
<div class="wrapper">
    <!-- top navbar-->
    <header class="topnavbar-wrapper">
        <!-- START Top Navbar-->
        @include('template.navBar')
        <!-- END Top Navbar-->
    </header>
    <!-- sidebar-->
    <aside class="aside">
        <!-- START Sidebar (left)-->
        @include('template.side')
        <!-- END Sidebar (left)-->
    </aside>

    <!-- Main section-->
    <section>
        <!-- Page content-->
        <div class="content-wrapper">

            <h3>{{$sectionName}} </h3>
            <div class="row">
                @yield('content')
            </div>
        </div>
    </section>
    <!-- Page footer-->
    <footer>
        @include('template.footer')
    </footer>
</div>

@include('messages')

<!-- =============== VENDOR SCRIPTS ===============-->
<!-- JQUERY-->
<script src="assets/angle/vendor/jquery/dist/jquery.js"></script>

<script src="assets/js/custom.js"></script>
<!-- MODERNIZR-->
<script src="assets/angle/vendor/modernizr/modernizr.custom.js"></script>
<!-- MATCHMEDIA POLYFILL-->
<script src="assets/angle/vendor/matchMedia/matchMedia.js"></script>

<!-- BOOTSTRAP-->
<script src="assets/angle/vendor/bootstrap/dist/js/bootstrap.js"></script>
<!-- STORAGE API-->
<script src="assets/angle/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
<!-- JQUERY EASING-->
<script src="assets/angle/vendor/jquery.easing/js/jquery.easing.js"></script>
<!-- ANIMO-->
<script src="assets/angle/vendor/animo.js/animo.js"></script>
<!-- SLIMSCROLL-->
<script src="assets/angle/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<!-- SCREENFULL-->
<script src="assets/angle/vendor/screenfull/dist/screenfull.js"></script>
<!-- LOCALIZE-->
<script src="assets/angle/vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
<!-- RTL demo-->
<script src="assets/angle/js/demo/demo-rtl.js"></script>
<!-- =============== PAGE VENDOR SCRIPTS ===============-->

<!-- =============== APP SCRIPTS ===============-->
<script src="assets/angle/js/app.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap.min.js"></script>

<link href="assets/color_picker/css/jquery.minicolors.css" rel="stylesheet" type="text/css" media="all" >

<script src="assets/color_picker/js/jquery.minicolors.min.js" ></script>

<script src="assets/inspinia/js/plugins/datapicker/bootstrap-datepicker.js" ></script>

<script src="assets/js/jquery_datepicker_es.js"></script>



@yield('js')
<script>

    if ($('#msg').length){

        $.notify($('.error').text(),{
            status:'success',
            pos:'bottom-right'
        });
    }

    $('.datepicker').datepicker({
        languaje :'es'
    });


    $('#dataTable').DataTable({
        columnDefs: [
            { targets: 'no-sort', orderable: false }
        ],
        "order": [[ 1, "asc" ]],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    });

    //color picker
    $(function(){
        var colpick = $('.demo').each( function() {
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                inline: $(this).attr('data-inline') === 'true',
                letterCase: 'lowercase',
                opacity: false,
                change: function(hex, opacity) {
                    if(!hex) return;
                    if(opacity) hex += ', ' + opacity;
                    try {
                        console.log(hex);
                    } catch(e) {}
                    $(this).select();
                },
                theme: 'bootstrap'
            });
        });

        var $inlinehex = $('#inlinecolorhex h3 small');
        $('#inlinecolors').minicolors({
            inline: true,
            theme: 'bootstrap',
            change: function(hex) {
                if(!hex) return;
                $inlinehex.html(hex);
            }
        });
    });
</script>
</body>

</html>