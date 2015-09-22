<!DOCTYPE html>
<html>
    <head lang="en">
        <base href="{{asset('')}}">



        <link href="assets/css/custom.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">


        <link href="assets/css/custom.css" rel="stylesheet">

        <meta charset="UTF-8">
        <title></title>

    </head>

<body>

    @yield('menu')



    @include('messages')



            <div class="col-xs-2">

               @yield('side')
            </div>

            <div class="col-xs-10">
                @yield('mainContent')
            </div>





    </body>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.8/js/dataTables.bootstrap.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>


    <script src="assets/js/jquery_datepicker_es.js"></script>
    <script src="assets/js/custom.js"></script>


</html>