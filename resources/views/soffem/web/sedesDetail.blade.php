@extends('soffem/web/template')

@section('content')
    <div class="col-lg-12 text-center">
        <div class="navy-line"></div>
        <h1><span class="navy">SEDES</span></h1>
        <p>{!! $sede->nombre !!}</p>
    </div>

    <div class="col-xs-10 col-xs-offset-1">
        <div class="thumbnail">
            <img src="{!! $sede->Images->first()->image or "" !!}" alt="{!! $sede->name !!}" class="img-responsive center-block">
            <div class="caption">
                <h4>{!! $sede->address !!}</h4>
                <p>Teléfono: {!! $sede->phone!!}</p>
            </div>
        </div>
    </div>

    <div class="col-xs-10 col-xs-offset-1">
        <div class="thumbnail">
            <div id="map_canvas" class="center-block" data-direccion="{!! $sede->address !!}" style="width:700px;height:450px;"></div>
        </div>
    </div>



@endsection

@section('js')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=adsense&amp;sensor=true&amp;language=es&amp;components=country:AR"></script>
    <script>
        $(document).ready(function () {
            $.each($(".menu-dropdown #menu li.parent-menu"),function(i,data){
                $(data).attr('data-id',i);

                $.each($(".menu-dropdown .submenu"),function(e,d){
                    $(d).attr('data-parent',e);
                });
            });

            $(".menu-dropdown").on('click',function(ev){
                ev.preventDefault();
                ev.stopPropagation();

                var self = $(this);

                $.each($(self).find(".submenu"),function(i,data){
                    if($(data).hasClass("menu-active")){
                        $(data).removeClass("menu-active");
                        $(data).toggle();
                    }
                });


                $(this).find("#menu").toggle();

                $(this).find("#menu .parent-menu").on('click',function(ev){
                    ev.preventDefault();
                    ev.stopPropagation();

                    var ind = $(this).attr("data-id");

                    $.each($(self).find(".submenu"),function(i,data){
                        if($(data).hasClass("menu-active")){
                            $(data).removeClass("menu-active");
                            $(data).toggle();
                        }
                        $(data).click(function () {
                            window.location = $(data).find('a').attr('href');
                        });
                    });

                    $(self).find(".submenu[data-parent="+ind+"]").addClass('menu-active');
                    $(self).find(".submenu[data-parent="+ind+"]").toggle();

                });

            });


            $(".navbar-fixed-top").addClass("navbar-scroll")
//            $('body').scrollspy({
//                target: '.navbar-fixed-top',
//                offset: 80
//            });
//
//            // Page scrolling feature
//            $('a.page-scroll').bind('click', function(event) {
//                var link = $(this);
//                $('html, body').stop().animate({
//                    scrollTop: $(link.attr('href')).offset().top - 50
//                }, 500);
//                event.preventDefault();
//                $("#navbar").collapse('hide');
//            });
        });



        //        var cbpAnimatedHeader = (function() {
        //            var docElem = document.documentElement,
        //                    header = document.querySelector( '.navbar-default' ),
        //                    didScroll = false,
        //                    changeHeaderOn = 200;
        //            function init() {
        //                window.addEventListener( 'scroll', function( event ) {
        //                    if( !didScroll ) {
        //                        didScroll = true;
        //                        setTimeout( scrollPage, 250 );
        //                    }
        //                }, false );
        //            }
        //            function scrollPage() {
        //                var sy = scrollY();
        //                if ( sy >= changeHeaderOn ) {
        //                    $(header).addClass('navbar-scroll')
        //                }
        //                else {
        //                    $(header).removeClass('navbar-scroll')
        //                }
        //                didScroll = false;
        //            }
        //            function scrollY() {
        //                return window.pageYOffset || docElem.scrollTop;
        //            }
        //            init();
        //
        //        })();

    </script>
    <script>
        var address = $('#map_canvas').attr('data-direccion');
        // Creamos el Objeto Geocoder
        var geocoder = new google.maps.Geocoder();
        // Hacemos la petición indicando la dirección e invocamos la función
        // geocodeResult enviando todo el resultado obtenido
        if(geocoder.geocode({ 'address': address}, geocodeResult))
            geocoder.geocode({ 'address': address}, geocodeResult);
        else{
            var coords = address.split(",");
            var lat = parseFloat(coords[0]);
            var lng = parseFloat(coords[1]);
            var latlng = new google.maps.LatLng(lat, lng);
            geocoder.geocode({ 'latLng': latlng}, geocodeResult);
        }

        function geocodeResult(results, status) {
            // Verificamos el estatus
            if (status == 'OK') {
                // Si hay resultados encontrados, centramos y repintamos el mapa
                // esto para eliminar cualquier pin antes puesto
                var mapOptions = {
                    zoom: 16,
                    center: results[0].geometry.location,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map($("#map_canvas").get(0), mapOptions);
                // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
//                map.fitBounds(results[0].geometry.viewport);
                // Dibujamos un marcador con la ubicación del primer resultado obtenido
                var markerOptions = { position: results[0].geometry.location }
                var marker = new google.maps.Marker(markerOptions);
                marker.setMap(map);
            } else {
                // En caso de no haber resultados o que haya ocurrido un error
                // lanzamos un mensaje con el error
//                alert("No se encontrá la ubicación");
            }
        }
    </script>
@endsection
