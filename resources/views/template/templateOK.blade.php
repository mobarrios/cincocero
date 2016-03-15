<!DOCTYPE html>
<html>
    <head lang="en">
        <base href="{{asset('')}}">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/jquery-ui.css" rel="stylesheet" >
        <link href="assets/css/custom.css" rel="stylesheet">
        <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/dataTables.fontAwesome.css" rel="stylesheet">

        <meta charset="UTF-8">
        <title></title>

    </head>

<body>

    @yield('menu')



    <div class="content">
        @include('messages')

            <div class=" col-xs-12 ">
                <div class="panel panel-default">
                 @yield('mainContent')
                </div>
            </div>
    </div>



    </body>



    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/tinymce/tinymce.min.js"></script>
    <script src="assets/js/jquery_datepicker_es.js"></script>
    <script src="assets/js/custom.js"></script>


</html>