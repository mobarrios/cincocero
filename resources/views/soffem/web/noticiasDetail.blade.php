@extends('soffem/web/template')

@section('content')

    <div class="col-lg-10 col-lg-offset-1 mt-300">
        <div class="ibox">
            <div class="ibox-content">
                <div class="text-center article-title m-b-lg">
                    <span class="text-muted"><i class="fa fa-clock-o"></i> {!! $noticia->date !!}</span>
                    <h1>
                        {!! $noticia->title !!}
                    </h1>
                    <h4 class="text-gray-light">
                        {!! $noticia->description !!}
                    </h4>
                    <div class="col-xs-12 text-center m-t-sm">
                        <img width="400" src="{!! $noticia->Images->first()->image !!}" alt="{!! $noticia->title !!}" class="img-responsive center-block img-shadow img-thumbnail">
                    </div>
                </div>
                <div class="col-xs-12 m-t-lg">
                    {!! $noticia->detail !!}

                    <hr>
                </div>


            </div>
        </div>
    </div>

@endsection