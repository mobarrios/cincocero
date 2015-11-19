@extends('template.webTemplate')

    @section('content')


        <div class="container">
            <h4 class="page-title">Galleria de Fotos</h4>
        </div>

        <div id="popup-gallery">
            <div class="row row-col-gap">

                @foreach($galeries as $galery)
                    <div class="col-md-3">
                        <a class="hover-img popup-gallery-image" href="{{$galery->Images->first()->image}}" data-effect="mfp-zoom-out">
                            <img src="{{$galery->Images->first()->image}}" alt="Image Alternative text" title="{{$galery}}" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    @endsection
@stop
