@extends('template.webTemplate')
    @section('slide')

        <div class="top-area show-onload">
            <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(web/img/204804.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <div class="owl-cap-weather">
                            </div>
                            <h5 class="owl-cap-title fittext">DESCUBRA LA RUTA DE LOS SABORES MISIONEROS</h5>
                            <div class="owl-cap-price"><small></small>
                                <h5>Gastronomia</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(web/img/204802.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <div class="owl-cap-weather">
                            </div>
                            <h3 class="owl-cap-title fittext">EL CONFORT DE ALOJARSE EN IGUAZÚ</h3>
                            <div class="owl-cap-price"><small></small>
                                <h5>Hoteleria</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(web/img/204803.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <div class="owl-cap-weather">
                            </div>
                            <h3 class="owl-cap-title fittext">DISFRUTAR UN BUEN MOMENTO EN UN BUEN LUGAR</h3>
                            <div class="owl-cap-price">
                                <h5>Naturaleza</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-color text-white">
            <div class="container">
                <div class="gap"></div>
                <div class="row row-wrap" data-gutter="120">
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-thumbs-o-up box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">La Mejor Atención</h4>
                                <p class="thumb-desc">Eleifend tortor himenaeos mollis facilisis ligula sed himenaeos massa vivamus nulla posuere posuere</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-send box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Los Mejores Destinos</h4>
                                <p class="thumb-desc">Lectus ipsum eu elementum fames et fames vehicula montes sapien malesuada dictum nullam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-dollar box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Los Mejores Precios</h4>
                                <p class="thumb-desc">Auctor bibendum risus mauris porta ridiculus bibendum placerat rhoncus sagittis varius condimentum tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap gap-small"></div>
            </div>
        </div>
    @endsection
    @section('content')
        <div class="article post">
        @foreach($noticias as $noticia)
            <div class="post-inner">
                <h4 class="post-title"><a class="text-darken" href="#">{{$noticia->encabezado}}</a></h4>

                <ul class="post-meta">
                    <li><i class="fa fa-calendar"></i><a href="#">23 February, 2013</a>
                    </li>
                    <li><i class="fa fa-user"></i><a href="#">Ahagai</a>
                    </li>
                    
                    <div class="thumb col-xs-2">
                        <a class="hover-img" href="#">
                            <img src="{{$noticia->images->first()->image}}">

                        </a>
                    </div>

                    <p class="post-desciption">
                        {{$noticia->descripcion}}
                    </p>
                    <a class="btn btn-small btn-primary" href="#">Leer</a>
                </ul>
            </div>

        @endforeach
        </div>
    @endsection
@stop
