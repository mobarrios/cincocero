<!DOCTYPE html>
<html>
    <head lang="en">
        <base href="{{asset('')}}">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/custom.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.8/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <meta charset="UTF-8">
        <title></title>
        @yield('menu')
    </head>

    <body>

    <!-- Begin page content -->

    <div class="container">

        <div class="row">
            @include('messages')
            @yield('mainContent')
        </div>

    </div>


    <footer class="navbar navbar-fixed-bottom navbar-default">
        <div class="conteiner">
            <div class="row">


            <div class="col-xs-4">
                <span class="badge">Master</span>
            </div>
            <div class="col-xs-4">
                <h4>{{Session::get('company_code')}}</h4>
            </div>

            <div class="col-xs-4">
                <select id="changeLanguaje" data="{{Session::get('languaje')}}">
                    <option @if (Session::get('languaje') == 'es_ES' ) selected @endif value="es_ES">Español</option>
                    <option @if (Session::get('languaje') == 'en' )    selected @endif  value="en">English</option>
                </select>
            </div>
            </div>

        </div>
    </footer>

    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.8/js/dataTables.bootstrap.min.js"></script>



    <script src="assets/js/custom.js"></script>

</html>