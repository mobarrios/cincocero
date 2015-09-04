@extends('template.webTemplate')

    @section('content')

        <div class="container">
            <h4 class="page-title">Hoteleria</h4>
        </div>
        <h3 class="mb20">Hoteles 5 Estrellas</h3>
        <div class="row row-wrap">

            @foreach($hoteles  as $hotel)

                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="{{$hotel->images->first()->image}}" alt="Image Alternative text" title="{{$hotel->name}}" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>{{$hotel->name}}</h5>
                                    <p>{{$hotel->address}}</p>
                                    <p class="mb0">{{$hotel->web}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    @endsection
@stop
