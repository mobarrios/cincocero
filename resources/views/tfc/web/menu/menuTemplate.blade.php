<nav id="main-nav" class="pull-left">

    <ul id="main-menu" class="clearfix">
        <li class="current-menu-item">
            <a href="{{asset('/web')}}"><img src="assets/web/images/logo-white.png"></a></li>
        <li>
            <a href="{{asset('/web/reglamento')}}">Reglamento</a></li>
        <li>
            <a href="{{asset('/web/noticias')}}">Noticias</a></li>
        <li>
            <a href="{{asset('/web/sedes')}}">Sedes</a></li>
        <li><a href="{{asset('/web/galeria')}}">Galeria de Fotos</a></li>
        <li><a href="{{asset('/web/inscripcion')}}">Inscripcion</a></li>
        <li><a href="{{asset('/web/contactanos')}}">Contactanos</a></li>
    </ul>
    <ul class="redes">
        <li><span>Seguinos a través de:</span></li>
        <li><a href="https://www.facebook.com/TheFutbolCompany" target="_blank" class="fa fa-facebook-square"></a></li>
        <li><a href="https://twitter.com/FutbolCompany" target="_blank" class="fa fa-twitter-square"></a></li>
    </ul>
    <!-- main-menu -->

    {{--<i class='fa fa-align-justify'></i>--}}

    <div class="mobile-menu-wrapper">
        <a href="{{asset('/web')}}"><img src="assets/web/images/logo-white.png"></a>
        <ul id="mobile-menu">
            <li>
                <a href="{{asset('/web/reglamento')}}">Reglamento</a></li>
            <li>
                <a href="{{asset('/web/noticias')}}">Noticias</a></li>
            <li>
                <a href="{{asset('/web/sedes')}}">Sedes</a></li>
            <li><a href="{{asset('/web/galeria')}}">Galeria de Fotos</a></li>
            <li><a href="{{asset('/web/inscripcion')}}">Inscripcion</a></li>
            <li><a href="{{asset('/web/contactanos')}}">Contactanos</a></li>
            <hr>
            @foreach(\App\Entities\tfc\Categories::all() as $cat)
                <li class="current-menu-item">
                    <a href="{{route('principal',$cat->id)}}"><img src="{{$cat->images->first()->image}}" class="img-responsive" alt=""/></a></li>
            @endforeach
        </ul>
        <!-- mobile-menu -->
    </div>

    <!-- mobile-menu-wrapper -->


</nav>