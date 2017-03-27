@extends('tfc.web.new.template')

@section('content')

        <div class="tm-bottom-a-box ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="contact-page">
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <div class="contact-title">
                                            <h2>{!! $sedes->name !!} </h2>
                                        </div>
                                        <div class="contact-text">Dirección: {!! $sedes->address !!}</div>
                                        <div class="contact-text">Telefono: {!! $sedes->phone !!}</div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="tm-bottom-b-box tm-full-width">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-b" class="tm-bottom-b uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="map-wrap">

                                <div class="contact-form-wrap uk-flex">
                                    <div class="uk-container uk-container-center uk-flex-item-1">
                                        <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1 uk-nbfc">
                                            <div id="map_canvas" class="center-block" data-direccion="{!! $sedes->address !!}" style="width:800px;height:600px;"></div>

                                         </div>
                                    </div>
                                </div>
                            </div>
                                                
                            </div>
                        </div>
                </section>
            </div>
        </div>
        <br><br>
@endsection

@section('js')
    <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
    <script>
//        window.map = false;
//
//
//
//        function initialize(){
//            var myLatlng = new google.maps.LatLng(-34.595034,-58.51029510000001);
//
//            var mapOptions = {
//                zoom:16,
//                center: myLatlng,
//                mapTypeId: google.maps.MapTypeId.ROADMAP,
//                scrollwheel: false,
//
//                streetViewControl:false,
//                overviewMapControl:false,
//                mapTypeControl:false
//
//            };
//
//            window.map = new google.maps.Map(document.getElementById('map'), mapOptions);
//
//        }
//
//        google.maps.event.addDomListener(window, 'load', initialize);


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

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection