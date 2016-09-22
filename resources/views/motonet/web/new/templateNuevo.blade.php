<!DOCTYPE html>
<html lang="es">
<head>
    <base href="{!! asset('') !!}">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title>MotoNET</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/unicase/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/unicase/css/main.css">
    <link rel="stylesheet" href="assets/unicase/css/blue.css">
    <link rel="stylesheet" href="assets/unicase/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/unicase/css/owl.transitions.css">
    <!--<link rel="stylesheet" href="assets/unicase/css/owl.theme.css">-->
    <link href="assets/unicase/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/unicase/css/animate.min.css">
    <link rel="stylesheet" href="assets/unicase/css/rateit.css">
    <link rel="stylesheet" href="assets/unicase/css/bootstrap-select.min.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/unicase/css/config.css">
    <link href="assets/unicase/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/chat.css" rel="stylesheet"/>

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/unicase/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Favicon
    <link rel="shortcut icon" href="assets/unicase/images/favicon.ico">
    -->

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="assets/unicase/js/html5shiv.js"></script>
    <script src="assets/unicase/js/respond.min.js"></script>
    <![endif]-->


</head>
<body class="cnt-home">

<header class="header-style-1">

    @include('motonet/web/new/topMenu')

    @include('motonet.web.new.index.mainHeader')

    @include('motonet/web/new/navBar')

</header>


<div class="body-content outer-top-xs" id="top-banner-and-menu">

    <div class="container">

          @include('motonet.web.new.index.mainPromos')

          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                @include('motonet.web.new.index.categorias')

            </div>

            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                @include('motonet.web.new.index.slider')
            </div>

          </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                @include('motonet.web.new.index.productosDestacados')
            </div>
        </div>

        <hr>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
                <!-- /.wide-banners -->

                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

                <!-- ============================================== BEST SELLER ============================================== -->

                @include('motonet.web.new.index.masVendidos')
                <!-- ============================================== BEST SELLER : END ============================================== -->

                <!-- ============================================== BLOG SLIDER ============================================== -->
               @include('motonet.web.new.index.nuestrosLocales')
                <!-- ============================================== BLOG SLIDER : END ============================================== -->


            </div><!-- /.homebanner-holder -->


            <!-- ============================================== CONTENT : END ============================================== -->
        </div><!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        @include('motonet.web.new.index.nuestrasMarcas')
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->




<!-- ============================================================= CHAT ============================================================= -->
<div id="chat">
    <div class="container">
        <div class="row chat-window col-xs-7 col-sm-5 col-md-4 col-lg-3" id="chat_window_1" style="margin-left:10px;">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading top-bar">
                        <div class="col-md-8 col-xs-8">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Soporte</h3>
                        </div>
                        <div class="col-md-4 col-xs-4" style="text-align: right;">
                            <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                            <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                        </div>
                    </div>
                    <div id="chat_content" class="panel-body msg_container_base">

                    </div>
                    <div class="panel-footer">
                        <form>
                            <div class="input-group">
                                <input autocomplete="off" id="m" type="text" class="form-control input-sm chat_input" placeholder="Escriba su mensaje" />
                                <span class="input-group-btn">
                                <button class="btn btn-primary btn-sm" id="btn-chat">Enviar</button>
                                </span>
                            </div>
                            <input id='from' value="{{\Illuminate\Support\Facades\Session::get('_token')}}" type="hidden" >
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{--
        <div class="btn-group dropup">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-cog"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
                <li class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
            </ul>
        </div>
        --}}
    </div>
{{--</div>--}}






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
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
<script>
    // var socket = io.connect('http://62.210.13.249:3000');

    //var socket = io.connect('localhost:3000');
    var socket = io.connect( '{!!  env('SOCKET_URL') !!}' +':'+'{!!  env('SOCKET_PORT') !!}');

    $('form').submit(function(){

        var msg = {
            to   : 'admin',
            from : $('#from').val() ,
            text : $('#m').val()
        }

        socket.emit('chat message',  msg );

        $('#m').val('');
        return false;
    });

    socket.on('chat message', function(msg){

        if(msg.from == $('#from').val() || msg.to == $('#from').val()){
            
            if(msg.from == $('#from').val()){
                $('#chat_content').append(chat_user(msg.msg));
            }
            if(msg.from == 'administrador'){
                $('#chat_content').append(chat_admin(msg.msg));
            }
        }

    });


    function chat_user(msg )
    {
      return   '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"> <div class="messages msg_sent"> <p>'+msg+'.</p> <time datetime="2009-11-13T20:00">Usuario • Hace 1 minuto</time> </div> </div> <div class="col-md-2 col-xs-2 avatar"> <img src="assets/web/img/chat-user.jpg" class=" img-responsive "> </div> </div>';
    }

    function chat_admin(msg )
    {
      return '<div class="row msg_container base_receive"> <div class="col-md-2 col-xs-2 avatar"> <img src="assets/web/img/chat-soporte.jpg" class=" img-responsive "> </div> <div class="col-md-10 col-xs-10"> <div class="messages msg_receive"> <p> '+msg+'</p> <time datetime="2009-11-13T20:00">Soporte • Ahora</time> </div> </div> </div>';
    }
</script>


<script>

    $(window).bind("load", function() {
        $('.show-theme-options').delay(1000).trigger('click');
    });

    var t;
    $(document).ready(function(){
        t = parseInt($("#videoInstitucional").width());

        $('#iframeFace').attr("src","https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmotonetonline&tabs=timeline%2Cmessages&width="+t+"&height=380&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=203933888898")
    });

//    window.onload(function(){
//        var t =
//       $("#videoInstitucional").css("width",)
//    });
</script>
<!-- For demo purposes – can be removed on production : End -->
<script src="assets/js/chat.js"></script>


</body>
</html>