@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif

            {!! Form::textCustom('name', 'Modelo')!!}

            {!! Form::fileCustom('image','Foto')!!}

            {!! Form::textGroupCustom('address', 'Dirección')!!}

                <div class="col-xs-12">
                    <div id="map_canvas" class="center-block" style="height:450px;"></div>
                </div>


        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection
    @section('js')
        <script>
            var map = null;
            var infoWindow = null;

            var address = $("input[name='address']").val();
            // Creamos el Objeto Geocoder
            var geocoder = new google.maps.Geocoder();
            // Hacemos la petición indicando la dirección e invocamos la función
            // geocodeResult enviando todo el resultado obtenido
            if(geocoder.geocode({ 'address': address, 'region': 'AR'}, geocodeResult))
                geocoder.geocode({ 'address': address, 'region': 'AR'}, geocodeResult);
            else{
                var coords = address.split(",");
                var lat = parseFloat(coords[0]);
                var lng = parseFloat(coords[1]);
                var latlng = new google.maps.LatLng(lat, lng);
                geocoder.geocode({ 'latLng': latlng}, geocodeResult);
            }

            function openInfoWindow(marker) {
                var markerLatLng2 = marker.getPosition();
                var markerLatLng = markerLatLng2.toUrlValue(7);
                var latlngStr = markerLatLng.split(",", 2);
                var lat_arg = parseFloat(latlngStr[0]);
                var lng_arg = parseFloat(latlngStr[1]);
                var latLong = new google.maps.LatLng(lat_arg, lng_arg);
                var infowindow = new google.maps.InfoWindow();

                geocoder.geocode({'latLng': latLong, 'region': 'AR'}
                        , function(results) {
                            infoWindow.setContent([
                                '<b>La sucursal está en:<br>'+results[0].formatted_address+'</b><br>',

                                'Arrastrame y haz click para actualizar la posición.'
                            ].join(''));
                            $("input[name='address']").val(results[0].formatted_address);
                        });

                infoWindow.open(map, marker);
            }

            function geocodeResult(results, status) {
                // Verificamos el estatus
                if (status == 'OK') {
                    var myOptions = {
                        zoom: 17,
                        center: results[0].geometry.location,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    map = new google.maps.Map($("#map_canvas").get(0), myOptions);

                    infoWindow = new google.maps.InfoWindow();

                    var marker = new google.maps.Marker({
                        position: results[0].geometry.location,
                        draggable: true,
                        map: map,
                        title:"La sucursal está en:",
                        animation: google.maps.Animation.DROP
                    });

                    marker.setIcon('assets/web/img/marker.png');

                    google.maps.event.addListener(marker, 'dragend', function(){
                        openInfoWindow(marker);
                    });

                        openInfoWindow(marker);
                }
            }

            $("#findLocation").on('click',function(ev){
                ev.preventDefault();
                var address = $("input[name='address']").val();
                geocoder.geocode({ 'address': address, 'region': 'AR'}, geocodeResult)

            });

        </script>


    @endsection
@stop