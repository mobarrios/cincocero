<section class="section outer-bottom-vs wow fadeInUp" id="sucursales">
    <h3 class="section-title">Puntos de entrega:</h3>

    <div class="blog-slider-container outer-top-xs">
        <div class="owl-carousel blog-slider custom-carousel">
            @foreach($branches as $branch)
                <div class="item text-center">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image">
                                <a href="" class="branchMap" data-toggle="modal" data-target="#detalle" data-address="{!! $branch->address !!}" data-name="{!! $branch->name !!}"><img data-echo="{!! $branch->images->first()->image or ''!!}" width="270" height="135" src="{!! $branch->images->first()->image or ''!!}" alt=""></a>
                            </div>
                        </div><!-- /.blog-post-image -->

                        <div class="blog-post-info ">
                            <h3 class="name"><a href="#" class="branchMap" data-toggle="modal" data-target="#detalle" data-address="{!! $branch->address !!}" data-name="{!! $branch->name !!}">{{ $branch->name }}</a></h3>
                            <span class="info">{!! $branch->address !!}</span>
                            <p class="text"></p>
                            <a href="" class="branchMap" data-toggle="modal" data-target="#detalle" data-address="{!! $branch->address !!}" data-name="{!! $branch->name !!}">
                                <span class="icon fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </div><!-- /.blog-post-info -->


                    </div><!-- /.blog-post -->
                </div><!-- /.item -->
            @endforeach

        </div><!-- /.owl-carousel -->
    </div><!-- /.blog-slider-container -->
</section><!-- /.section -->

<!-- Modal -->
<div class="modal fade" id="detalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="detalleName"></h4>
            </div>
            <div class="modal-body">
                <div id="detalleMap"></div>
            </div>
            <div class="modal-footer">
                <span class="info" id="detalleAddress"></span>
            </div>
        </div>
    </div>
</div>


@section('js')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;language=es&amp;components=country:AR&amp;key=AIzaSyAOViyqbMBHjmXwuc_CZUV2dCw2i-H6780"></script>
    <script>
        $(".branchMap").on('click',function(){
            var addr = $(this).attr('data-address');
            var name = $(this).attr('data-name');

            $('#detalle').on('shown.bs.modal', function () {
                var address = addr;
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
                        map = new google.maps.Map($("#detalleMap")[0], mapOptions);
                        // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
//                map.fitBounds(results[0].geometry.viewport);
                        // Dibujamos un marcador con la ubicación del primer resultado obtenido
                        var markerOptions = { position: results[0].geometry.location }
                        var marker = new google.maps.Marker(markerOptions);
                        marker.setMap(map);

                        $("#detalleMap").css("width","100%");
                        $("#detalleMap").css("height","250px");

                    }
                }

                $("#detalleName").text(name);
                $("#detalleAddress").text(address);
                $('#detalle').focus()

            });


            $('#detalle').on('hide.bs.modal', function (e) {
                $("#detalleName").text("");
                $("#detalleAddress").text("");
                $("#detalleMap").html("");
            })
        });





    </script>
@endsection