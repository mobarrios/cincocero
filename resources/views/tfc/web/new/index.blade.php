
<!-- Tutorial URL: http://sixrevisions.com/css/responsive-background-image/ -->

<!doctype html>
<html lang="en">
<head>
<base href="{!! asset('assets/web/new/asd') !!}">
<meta charset="utf-8">
<title>The Futbol Company. Profesionales en Futbol Amateurs.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Six Revisions">
  <meta name="description" content="How to use the CSS background-size property to make an image fully span the entire viewport.">
  <link rel="icon" href="http://sixrevisions.com/favicon.ico" type="image/x-icon" />
  <link href="http://fonts.googleapis.com/css?family=Kotta+One|Cantarell:400,700" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Not required: presentational-only.css only contains CSS for prettifying the demo -->
  <link rel="stylesheet" href="css/presentational-only.css">

  <!-- responsive-full-background-image.css stylesheet contains the code you want -->
  <link rel="stylesheet" href="css/responsive-full-background-image.css">
  
  <!-- Not required: jquery.min.js and presentational-only.js is only used to demonstrate scrolling behavior of the viewport  -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="css/presentational-only.js"></script>
</head>
<body>
  <nav class="navbar">
    <div class="inner">
      <img src="../../../images/logo-white_nuevo.png" width="50%">
    </div>
  </nav>

  <header class="container">

    <section class="content">
      <p class="sub-title"><strong>Selecciona tu Torneo</strong> </p>
      <p><a href="{!! route('new.torneos',[5,27]) !!}"><img src="../../../images/copa01.png"></a><a href="{!! route('new.torneos',[5,25]) !!}"><img src="../../../images/copa02.png"></a><a href="{!! route('new.torneos',[5,24]) !!}"><img src="../../../images/copa03.png"></a><a href="{!! route('new.torneos',[5,26]) !!}"><img src="../../../images/copa04.png"></a><a href="{!! route('new.torneos',[6,29]) !!}"><img src="../../../images/copa05.png"></a><a href="{!! route('new.torneos',[5,28]) !!}"><img src="../../../images/copa06.png"></a></p>
     

      
    </section>
  </header>
</body>
</html>