<!DOCTYPE html>
<html>
    <head lang="en">
        <base href="{{asset('')}}">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/custom.css" rel="stylesheet">

        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>

    <!-- Begin page content -->
    <div class="container">

        <h4>Brand</h4>
            @yield('mainContent')
    </div>


    <footer class="footer">
        <div class="conteiner">
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
    </footer>

    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <script src="assets/js/custom.js"></script>

</html>