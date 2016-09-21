<!DOCTYPE html>
<html lang="en">
<base href="{{asset('')}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>{nc} Sistema de Administración</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="assets/angle/vendor/fontawesome/css/font-awesome.min.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="assets/angle/vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="assets/angle/css/bootstrap.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="assets/angle/css/app.css" id="maincss">
</head>

<body>
<div class="wrapper">
    <div class="block-center mt-xl wd-xl">
        <!-- START panel-->
        <div class="panel panel-dark panel-flat">

            <div class="panel-heading text-center">
                Sistema de Administración
            </div>
            <div class="panel-body">
                <p class="text-center pv">Ingreso al Sistema</p>
                <hr>

                {!!Form::open(['route'=>'postLogin'])!!}

                <div class="form-group has-feedback">
                        <label for="signupInputEmail1" class="text-muted">Email</label>
                        <input name="email" type="text" placeholder="Enter email"  required class="form-control">
                        <span class="fa fa-envelope form-control-feedback text-muted"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="signupInputPassword1" class="text-muted">Password</label>
                        <input name="password" type="password" placeholder="Password"  required class="form-control">
                        <span class="fa fa-lock form-control-feedback text-muted"></span>
                    </div>
                    <div class="checkbox c-checkbox pull-left mt0">
                        <label>
                            <input name="remember" type="checkbox">
                            <span class="fa fa-check"></span>Recordarme
                        </label>
                    </div>


                {!!Form::submit(trans('messages.btnAccess'),['class'=>'btn btn-block btn-primary m-t'])!!}
                {!!Form::close()!!}
            </div>
        </div>
        <!-- END panel-->
        <div class="p-lg text-center">
            <span>&copy;</span>
            <span>2016</span>
            <span>-</span>
            <span>{nc}nav_coder</span>
            <br>
            <span>www.navcoder.net</span>
        </div>

    </div>

</div>
@include('messages')


<!-- =============== VENDOR SCRIPTS ===============-->
<!-- MODERNIZR-->
<script src="assets/angle/vendor/modernizr/modernizr.custom.js"></script>
<!-- JQUERY-->
<script src="assets/angle/vendor/jquery/dist/jquery.js"></script>
<!-- BOOTSTRAP-->
<script src="assets/angle/vendor/bootstrap/dist/js/bootstrap.js"></script>
<!-- STORAGE API-->
<script src="assets/angle/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
<!-- PARSLEY-->
<script src="assets/angle/vendor/parsleyjs/dist/parsley.min.js"></script>
<!-- =============== APP SCRIPTS ===============-->
<script src="assets/angle/js/app.js"></script>

<script>

    if ($('#msg').length){

        $.notify($('.error').text(),{
            status:'success',
            pos:'bottom-right'
        });
    }
</script>

</body>


</html>