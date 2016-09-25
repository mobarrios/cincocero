@extends('motonet/web/template')

@section('content')
    @include('motonet/web/includes/breadcrumbs')
    <div class="container">
        <h1>{!! $sucursal->name !!}</h1>

        <div class="mt-30 hidden-xs"></div>

        <div class="col-xs-12 col-md-6">
            <div id="map_canvas" class="center-block" data-direccion="{!! $sucursal->address !!}" style="height:450px;"></div>
        </div>
        <div class="col-xs-12 col-md-6">
            @if($sucursal->address)
                <div class="children-inline-block">
                    <h3 class="pr5">Encontranos en:</h3><p>{!! $sucursal->address !!}
                        @if($sucursal->city)
                            - {!! $sucursal->city !!}
                        @endif
                    </p>
                </div>
            @endif
            @if($sucursal->phone != "")
                <div class="children-inline-block">
                    <h3 class="pr5">Teléfono:</h3><p>{!! $sucursal->phone !!}</p>
                </div>
            @endif
            <div class="img-sucursal">
                <img class="img-responsive" src="{!! $sucursal->images->first()->image or "" !!}" alt="{!! $sucursal->name !!}">
            </div>
        </div>
    </div>
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