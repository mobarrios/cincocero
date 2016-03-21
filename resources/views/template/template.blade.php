<!DOCTYPE html>
<html lang="en">
<base href="{{asset('')}}">

<head>


    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NAVCODER</title>


    <style>

        .md-skin .navbar-static-side{
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
        }
    </style>

    <link href="assets/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/inspinia/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="assets/inspinia/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <!-- Gritter -->
    <link href="assets/inspinia/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="assets/inspinia/css/animate.css" rel="stylesheet">
    <link href="assets/inspinia/css/style.css" rel="stylesheet">
    <link href="assets/inspinia/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="assets/inspinia/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="assets/inspinia/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="assets/color_picker/css/jquery.minicolors.css" rel="stylesheet" type="text/css" media="all" >

    <script src="assets/inspinia/js/jquery-2.1.1.js"></script>
    <!-- jQuery UI -->
    <script src="assets/inspinia/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/inspinia/js/bootstrap.min.js"></script>

    <link href="assets/inspinia/css/plugins/datapicker/datepicker3.css" rel="stylesheet" type="text/css" media="all" >

    <link rel="stylesheet" href="assets/css/inputFile.css">
    <!--
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/metisMenu.css" rel="stylesheet">
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery-ui.css" rel="stylesheet" >
    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dataTables.fontAwesome.css" rel="stylesheet">

    <link href="assets/color_picker/css/jquery.minicolors.css" rel="stylesheet" type="text/css" media="all" >
    -->




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    --!>

    <![endif]-->



    @yield('css')
</head>

<body class="md-skin fixed-nav">
<div id="wrapper">

    @include('messages')

    @yield('side')

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            @yield('menu')
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2><span class="text-navy">{{$sectionName}}</span></h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                        @if(\Illuminate\Support\Facades\Session::has('bread'))
                            @foreach(\Illuminate\Support\Facades\Session::get('bread') as $section )
                                @foreach($section as $s => $r)
                                    <li> <a href="{{route($r)}}">{{$s}}</a></li>
                                @endforeach
                            @endforeach
                        @endif
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>

        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="pull-right">
                DB: <strong>{{Auth::user()->db}}</strong> | Perfil <strong>{{Auth::user()->db}}</strong>
            </div>
            <div>
                <strong>Copyright</strong> NavCoder &copy; 2014
            </div>
        </div>

    </div>
</div>


<!--

<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/sb-admin-2.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/tinymce/tinymce.min.js"></script>
<script src="assets/js/jquery_datepicker_es.js"></script>
<script src="assets/js/custom.js"></script>

<script src="assets/color_picker/js/jquery.minicolors.min.js" ></script>
/#wrapper -->

<!-- Mainly scripts -->

<script src="assets/inspinia/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="assets/inspinia/js/plugins/flot/jquery.flot.js"></script>
<script src="assets/inspinia/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/inspinia/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="assets/inspinia/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="assets/inspinia/js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="assets/inspinia/js/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/inspinia/js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="assets/inspinia/js/inspinia.js"></script>

<script src="assets/inspinia/js/plugins/pace/pace.min.js"></script>

<!-- GITTER -->
<script src="assets/inspinia/js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="assets/inspinia/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="assets/inspinia/js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="assets/inspinia/js/plugins/chartJs/Chart.min.js"></script>

<!-- Toastr -->
<script src="assets/inspinia/js/plugins/toastr/toastr.min.js"></script>

<script src="assets/inspinia/js/plugins/iCheck/icheck.min.js"></script>



<script src="assets/color_picker/js/jquery.minicolors.min.js" ></script>


<script src="assets/inspinia/js/plugins/datapicker/bootstrap-datepicker.js" ></script>


<script src="assets/js/jquery_datepicker_es.js"></script>

<script src="assets/js/custom.js"></script>

<script src="assets/js/inputFile.js"></script>

@yield('js')


<script>
    $(document).ready(function(){

        $('.datepicker').datepicker({
            languaje :'es'
        });

        $('#logout').on('click',function(){
            localStorage.setItem('menu_id',0);
        });

        if ($('#msg').length){
            toastr.options.closeButton = true;
            toastr.options.positionClass = 'toast-bottom-full-width';
            toastr.success($('.error'));
        }

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green'
        });



        $('.datepicker').datepicker();

        $('.datepicker').val("17-03-2016");



        });
</script>

{{--<script src="assets/js/jquery_datepicker_es.js"></script>--}}

</body>


</html>
