@extends('motonet/web/template')

@section('css')
    <link rel="stylesheet" href="assets/css/detalleProducto.css">
@endsection

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="img-producto col-xs-12 col-sm-10 col-sm-offset-1 col-md-5">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{!! asset('assets/web/img/moto.png') !!}" alt="moto">
                    </div>
                    <div class="item">
                        <img src="{!! asset('assets/web/img/cuatri.png') !!}" alt="cuatri">
                    </div>
                    <div class="item">
                        <img src="{!! asset('assets/web/img/cuatri.png') !!}" alt="cuatri">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
@endsection
