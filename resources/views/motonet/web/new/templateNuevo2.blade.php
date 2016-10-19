<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PR9T9D');
    </script>
    <!-- End Google Tag Manager -->

    <base href="{!! asset('') !!}">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/web/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/web/ico//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/web/ico//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/web/ico//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/web/ico//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/web/ico//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/web/ico//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/web/ico//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/web/ico//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/web/ico//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/web/ico//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/web/ico//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/web/ico//favicon-16x16.png">
    <link rel="manifest" href="assets/web/ico//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/web/ico//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    @yield('title')
    <title>MotoNET</title>
    

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/unicase/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/unicase/css/main.css">
    <link rel="stylesheet" href="assets/unicase/css/blue.css">
    <link rel="stylesheet" href="assets/unicase/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/unicase/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/unicase/css/owl.theme.css">
    <link href="assets/unicase/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/unicase/css/animate.min.css">
    <link rel="stylesheet" href="assets/unicase/css/rateit.css">
    <link rel="stylesheet" href="assets/unicase/css/bootstrap-select.min.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/unicase/css/config.css">
    <!--<link href="assets/unicase/css/blue.css" rel="alternate stylesheet" title="Blue color"> -->
    <link href="assets/css/chat.css" rel="stylesheet"/>

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/unicase/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    @yield('css')
    <!-- Favicon
    <link rel="shortcut icon" href="assets/unicase/images/favicon.ico">
    -->

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="assets/unicase/js/html5shiv.js"></script>
    <script src="assets/unicase/js/respond.min.js"></script>
    <![endif]-->

    @yield('DataLayers')


</head>
<body class="cnt-home">

    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR9T9D"
                height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

<header class="header-style-1">
    @include('motonet.web.new.index.mainHeader')

    @include('motonet/web/new/navBar')

</header>
@include('motonet.web.new.messages')


<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <!-- Google Tag Manager (noscript) -->

    <div class="container">

          @yield('promos')

          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                @include('motonet.web.new.index.categorias')

            </div>

            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                @yield('sideContent')
            </div>

          </div>

        @yield('content')
    </div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->


{{--<ul id="messages"></ul>--}}
{{--<form>--}}
    {{--<input id="m" autocomplete="off" /><button>Send</button>--}}
    {{--<input id='from' value="{{\Illuminate\Support\Facades\Session::get('_token')}}" type="hidden" >--}}
{{--</form>--}}


<!-- ============================================================= CHAT ============================================================= -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/57d997d83bec6867d946916d/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

{{--
 @include('motonet/web/new/chat');
--}}
<!-- ============================================================= FOOTER ============================================================= -->
@include('motonet/web/new/footer')
<!-- ============================================================= FOOTER : END============================================================= -->




<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="assets/unicase/js/jquery-1.11.1.min.js"></script>

<script src="assets/unicase/js/bootstrap.min.js"></script>

<script src="assets/unicase/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/unicase/js/owl.carousel.min.js"></script>

<script src="assets/unicase/js/echo.min.js"></script>
<script src="assets/unicase/js/jquery.easing-1.3.min.js"></script>
<script src="assets/unicase/js/bootstrap-slider.min.js"></script>
<script src="assets/unicase/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="assets/unicase/js/lightbox.min.js"></script>
<script src="assets/unicase/js/bootstrap-select.min.js"></script>
<script src="assets/unicase/js/wow.min.js"></script>
<script src="assets/unicase/js/scripts.js"></script>

<!-- For demo purposes – can be removed on production -->

<script src="switchstylesheet/switchstylesheet.js"></script>

<script src="https://cdn.socket.io/socket.io-1.2.0.js"></script>

<!-- For demo purposes – can be removed on production -->


<script>
    $(document).ready(function(){
        $(".changecolor").switchstylesheet( { seperator:"color"} );
        $('.show-theme-options').click(function(){
            $(this).parent().toggleClass('open');
            return false;
        });
    });

    $(window).bind("load", function() {
        $('.show-theme-options').delay(2000).trigger('click');
    });
</script>

<x></x><script src="assets/js/chat.js"></script>

<script>

//    $(window).bind("load", function() {
//        $('.show-theme-options').delay(1000).trigger('click');
//    });

   // var t;
   // $(document).ready(function(){
   //     t = parseInt($("#videoInstitucional").width());

      //  $('#iframeFace').attr("src","https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmotonetonline&tabs=timeline%2Cmessages&width="+t+"&height=380&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=203933888898")
   // });

//    window.onload(function(){
//        var t =
//       $("#videoInstitucional").css("width",)
//    });
</script>
<!-- For demo purposes – can be removed on production : End -->

<script>

    /*
        // var socket = io.connect('http://62.210.13.249:3000');

        //var socket = io.connect('localhost:3000');

        $('#connect').on('click',function() {

            var clientMail ;

                if($('#emailChat').val() == "" ){
                     alert('para comenzar el chat completar el email.');
                    return false;
                 }else{

                    clientMail = $('#emailChat').val();
                }


            var socket = io.connect( '{!!  env('SOCKET_URL') !!}' +':'+'{!!  env('SOCKET_PORT') !!}');

            $('#panelFooter').removeAttr('hidden');
            $('#divMail').hide();


            $('#form').on('submit',function(e){

                e.preventDefault();

                var msg = {
                    to   : 'admin',
                    //from : $('#from').val() ,
                    from : clientMail,
                    text : $('#m').val()
                }

                socket.emit('chat message',  msg );

                $('#m').val('');
                return false;
            });

            socket.on('chat message', function(msg){

                /*
                if(msg.from == $('#from').val() || msg.to == $('#from').val()){

                    if(msg.from == $('#from').val()){
                        $('#chat_content').append(chat_user(msg.msg));
                    }
                    if(msg.from == 'administrador'){
                        $('#chat_content').append(chat_admin(msg.msg));
                    }
                }

                if(msg.from == clientMail || msg.to == clientMail) {

                    if (msg.from == clientMail) {
                        $('#chat_content').append(chat_user(msg.msg));
                    }
                    if (msg.from == 'admin') {
                        $('#chat_content').append(chat_admin(msg.msg));
                    }

                }

            });


            function chat_user(msg )
            {
                return   '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"> <div class="messages msg_sent"> <p>'+msg+'.</p> <time datetime="2009-11-13T20:00">'+clientMail+' • Hace 1 minuto</time> </div> </div> <div class="col-md-2 col-xs-2 avatar"> <img src="assets/web/img/chat-user.jpg" class=" img-responsive "> </div> </div>';
            }

            function chat_admin(msg )
            {
                return '<div class="row msg_container base_receive"> <div class="col-md-2 col-xs-2 avatar"> <img src="assets/web/img/chat-soporte.jpg" class=" img-responsive "> </div> <div class="col-md-10 col-xs-10"> <div class="messages msg_receive"> <p> '+msg+'</p> <time datetime="2009-11-13T20:00">Soporte • Ahora</time> </div> </div> </div>';
            }
        });*/
</script>
@yield('js')
</body>
</html>