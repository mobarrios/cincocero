@extends('tfc/web/template')
@section("content")
    @include('tfc/web/leftbar/leftbar')
    <div class="center-col">

        <center>
            <!-- breadcrumb -->
        </center>
        <div class="elements-box">
            <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                <div id="contact-box">
                    <div class="widget-area-3">
                        <div class="widget punica-featured-news-widget">
                            <h2 class="widget-title clearfix">SEDE <b>{!! $sedes->name !!}</b></h2>
                            <!-- punica-featured-news-slider --><!-- older-post -->
                        </div>
                        <!-- punica-featured-news-widget -->
                        <!-- punica-entry-list-2-widget -->
                    </div>
                    <p>Unite al torneo más competitivo,   jugá en campos profesionales  con instalaciones de primer  nivel y en un ambiente tranquilo.</p>
                    <p><img src="{!! $sedes->images->first()->image or ""!!}" class="center-block" width="600" height="338" alt="{!! $sedes->name !!}"/></p>
                    <p>&nbsp;</p>
                    <p><span class="entry-title">Donde Estamos</span></p>
                    <p><span class="entry-title">Telefono: {!! $sedes->phone !!}</span></p>
                    <p>&nbsp;</p>
                    <p>
                        <div id="map_canvas" class="center-block" data-direccion="{!! $sedes->address !!}" style="width:700px;height:450px;"></div>
                        {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4131.757965583981!2d-58.59759508416878!3d-34.86365776270191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcda627daf7f79%3A0x906b010d22d8b495!2sCamino+Real+Presb%C3%ADtero+Gonz%C3%A1lez+y+Arag%C3%B3n%2C+Tristan+Su%C3%A1rez%2C+Buenos+Aires!5e1!3m2!1ses-419!2sar!4v1445562180847" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}


                    </p>
                    <p>&nbsp;</p>
                    <div id="response"></div>
                </div></div>
            <p>&nbsp;</p>
            <center><!-- row --></center>
            <!-- row --><!-- row --><!-- row -->

            <div class="row"></div>
            <!-- row --><!-- row --><!-- row --><!-- row --><!-- row --><!-- row -->

        </div>
        <!-- elements-box -->

    </div>
    <!-- center-col -->
@endsection
@section('js')
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
                    center: results[0].geometry.location,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map($("#map_canvas").get(0), mapOptions);
                // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
                map.fitBounds(results[0].geometry.viewport);
                // Dibujamos un marcador con la ubicación del primer resultado obtenido
                var markerOptions = { position: results[0].geometry.location }
                var marker = new google.maps.Marker(markerOptions);
                marker.setMap(map);
            } else {
                // En caso de no haber resultados o que haya ocurrido un error
                // lanzamos un mensaje con el error
                alert("No se encontrá la ubicación");
            }
        }
    </script>
@endsection