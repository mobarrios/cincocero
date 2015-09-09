@extends('template.webTemplate')

@section('content')

    <div class="container">
        <h1 class="page-title">{{$noticias->encabezado}}</h1>
    </div>

    <div class="container">
        <div class="article post">
            <header class="post-header">
                <a class="hover-img" href="#">
                    <img src="{{$noticias->images->first()->image}}" alt="Image Alternative text"  /><i class="fa fa-link box-icon-# hover-icon round"></i>
                </a>
            </header>
            <div class="post-inner">

                    {!! $noticias->descripcion !!}

            </div>
        </div>
    </div>
@endsection
@stop
