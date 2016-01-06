<!-- Navigation panel -->
<nav class="main-nav dark transparent stick-fixed">
    <div class="full-wrapper relative clearfix">
        <!-- Logo ( * your text or image into link tag *) -->
        <div class="nav-logo-wrap local-scroll">
            <a href="#" class="logo">
                <img src="assets/web/images/logo-white.png" alt="" />
            </a>
        </div>
        <div class="mobile-nav">
            <i class="fa fa-bars"></i>
        </div>

        <!-- Main Menu -->
        <div class="inner-nav desktop-nav">
            <ul class="clearlist">
                <li><a href="{{asset('web/principal')}}" class="mn-has-sub active">Home </a></li>
                <li><a href={{asset("web/reglamento")}}>Reglamento</a></li>
                <li><a href={{asset("web/noticias")}} class="mn-has-sub">Noticias </a></li>
                <li><a href={{asset("web/sedes")}} class="mn-has-sub">Sedes </a></li>
                <li><a href={{asset("web/galeria")}} class="mn-has-sub">Galeria de Fotos </a></li>
                <li><a href={{asset("web/inscripcion")}} class="mn-has-sub">Inscripcion Online </a></li>
                <li><a href={{asset("web/contactanos")}} class="mn-has-sub">Contactanos </a></li>
                <li><a href="" class="mn-has-sub"><font color="#c5cc33"><b>Tel.: 4504.9683 </b></font></a></li>
            </ul>
        </div>
        <!-- End Main Menu -->
    </div>
</nav>
<!-- End Navigation panel -->