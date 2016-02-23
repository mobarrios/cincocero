@extends('template.webTemplate')

    @section('content')
        <div class="container">
            <h4 class="page-title">Hoteleria</h4>
        </div>

        <div class="col-md-3">
            <aside class="booking-filters text-white">
                <h3>Filtrar por:</h3>
                <ul class="list booking-filters-list">

                    <li>
                        <h5 class="booking-filters-title">Categorías</h5>
                        <div class="checkbox">
                            <label class="">
                                <div class="i-check"><input style="position: absolute; opacity: 0;" class="i-check" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>5 star (220)</label>
                        </div>
                        <div class="checkbox">
                            <label class="">
                                <div class="i-check"><input style="position: absolute; opacity: 0;" class="i-check" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>4 star (112)</label>
                        </div>
                        <div class="checkbox">
                            <label class="">
                                <div class="i-check"><input style="position: absolute; opacity: 0;" class="i-check" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>3 star (75)</label>
                        </div>
                        <div class="checkbox">
                            <label class="">
                                <div class="i-check"><input style="position: absolute; opacity: 0;" class="i-check" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>2 star (60)</label>
                        </div>
                        <div class="checkbox">
                            <label class="">
                                <div class="i-check"><input style="position: absolute; opacity: 0;" class="i-check" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>1 star (20)</label>
                        </div>
                    </li>

                </ul>
            </aside>
        </div>
        <h3 class="mb20">Hoteles 5 Estrellas</h3>

        <div class="row row-wrap">

            @foreach($hoteles  as $hotel)

                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="{{$hotel->images->first()->image}}" alt="Image Alternative text" title="hotel 1">
                                <h6 class="hover-title-center">Ver.</h6>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">{{$hotel->name}}</a></h5>
                            <p class="mb0"><small>{{$hotel->address}}</small>
                            </p>
                            <p class="mb0 text-darken"><small>{{$hotel->web}}</small>
                            </p>
                        </div>
                    </div>
                </div>


            @endforeach

        </div>
    @endsection


@stop
