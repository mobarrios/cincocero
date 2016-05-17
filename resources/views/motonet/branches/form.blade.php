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

            {!! Form::textCustom('address', 'Dirección')!!}

                <div class="col-xs-12 col-md-6">
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

            function openInfoWindow(marker) {
                var markerLatLng = marker.getPosition();
                infoWindow.setContent([
                    '<b>La sucursal está en:'+markerLatLng.lat()+'</b>',

                    'Arrastrame y haz click para actualizar la posición.'
                ].join(''));
                infoWindow.open(map, marker);
            }

            function initialize() {
                var myLatlng = new google.maps.LatLng(20.68017,-101.35437);
                var myOptions = {
                    zoom: 13,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                map = new google.maps.Map($("#map_canvas").get(0), myOptions);

                infoWindow = new google.maps.InfoWindow();

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    draggable: true,
                    map: map,
                    title:"La sucursal está en"
                });

                google.maps.event.addListener(marker, 'click', function(){
                    openInfoWindow(marker);
                });
            }

            $(document).ready(function() {
                initialize();
            });

        </script>


    @endsection
@stop