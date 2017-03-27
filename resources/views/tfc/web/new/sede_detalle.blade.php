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
                                            <div id="map" class="center-block" data-direccion="{!! $sedes->address !!}" style="width:800px;height:600px;"></div>
                                         {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.4312651174223!2d-58.52500968417153!3d-34.74472757248102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccfa5acf25ef5%3A0xb86ad5063a8acb09!2sSETIA!5e0!3m2!1ses-419!2sar!4v1478519507232" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>--}}


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

    <script>


        var address = $('#map').attr('data-direccion');
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