<!DOCTYPE html>
<html>

<base href="{{asset('')}}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="assets/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="assets/inspinia/css/animate.css" rel="stylesheet">
    <link href="assets/inspinia/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="assets/inspinia/css/style.css" rel="stylesheet">

    <!-- Mainly scripts -->
    <script src="assets/inspinia/js/jquery-2.1.1.js"></script>
    <script src="assets/inspinia/js/bootstrap.min.js"></script>
    <script src="assets/inspinia/js/plugins/toastr/toastr.min.js"></script>
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name" style="color: rgba(0, 198, 160, 0.14);">{nc}</h1>

        </div>
        <h3>Nav { Coder }</h3>

        {!!Form::open(['route'=>'postLogin'])!!}
        <form role="form">
            <fieldset>

                <div class="form-group">

                    <div class="input-group">
                        {!!Form::text('email',null,['class'=>'form-control'])!!}
                        <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                    </div>
                </div>

                <div class="form-group">

                    <div class="input-group">
                        {!!Form::password('password',['class'=>'form-control'])!!}
                        <span class="input-group-addon"><i class="fa fa-lock"></i> </span>
                    </div>

                </div>
                <div class="checkbox">
                    <label>
                        <input name="remember" value="Remember Me" type="checkbox">No cerrar sesion
                    </label>
                </div>


                {!!Form::submit(trans('messages.btnAccess'),['class'=>'btn btn-block btn-primary m-t'])!!}
                {!!Form::close()!!}

            </fieldset>
        </form>

    </div>
</div>
@include('messages')

<script>
    if ($('#msg').length){
        toastr.options.closeButton = true;
        toastr.options.positionClass = 'toast-bottom-full-width';
        toastr.success($('.error'));
    }
</script>
</body>

</html>
