@extends('template.webTemplate')
    @section('slide')
        <div class="parallax-window" data-parallax="scroll" data-image-src="web/img/204804.png" data-z-index="0">
            <h5 class="owl-cap-title fittext">DESCUBRA LA RUTA DE LOS SABORES MISIONEROS</h5>
            <div class="owl-cap-price"><small></small>
                <h5>Gastronomia</h5>
            </div>
        </div>

        <div class="bg-color text-white">
            <div class="container">
                <div class="gap"></div>
                <div class="row row-wrap" data-gutter="120">
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-thumbs-o-up box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">La Mejor Atención</h4>
                                <p class="thumb-desc">Eleifend tortor himenaeos mollis facilisis ligula sed himenaeos massa vivamus nulla posuere posuere</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-send box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Los Mejores Destinos</h4>
                                <p class="thumb-desc">Lectus ipsum eu elementum fames et fames vehicula montes sapien malesuada dictum nullam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-dollar box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Los Mejores Precios</h4>
                                <p class="thumb-desc">Auctor bibendum risus mauris porta ridiculus bibendum placerat rhoncus sagittis varius condimentum tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap gap-small"></div>
            </div>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="web/img/1280x852.png" data-z-index="0">
            <h5 class="owl-cap-title fittext">DESCUBRA LA RUTA DE LOS SABORES MISIONEROS</h5>
            <div class="owl-cap-price"><small></small>
                <h5>Gastronomia</h5>
            </div>
        </div>
    @endsection
    @section('content')
        <div class="col-sm-6 col-sm-offset-3 col-md-3" style="margin-top: 25px;">
        <h5 class="text-center">Consultar disponibilidad</h5>
            <div class="booking-item-dates-change">
                <form>
                    <div class="input-daterange" data-date-format="MM d, DD">
                        <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                            <label>Check in</label>
                            <input class="form-control" name="start" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                            <label>Check out</label>
                            <input class="form-control" name="end" type="text" />
                        </div>
                    </div>
                    <div class="form-group form-group-select-plus">
                        <label>Adults</label>
                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="options" />1</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />2</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />3</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />4</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />5</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />5+</label>
                        </div>
                        <select class="form-control hidden">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option selected="selected">6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                        </select>
                    </div>
                    <div class="form-group form-group-select-plus">
                        <label>Children</label>
                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="options" />0</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />1</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />2</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />3</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />4</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />4+</label>
                        </div>
                        <select class="form-control hidden">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option selected="selected">5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                        </select>
                    </div>
                    <div class="form-group form-group-select-plus">
                        <label>Rooms</label>
                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="options" />1</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />2</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />3</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />4</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />5</label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" />5+</label>
                        </div>
                        <select class="form-control hidden">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option selected="selected">6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <span class="visible-sm"></span>
        <div class="article post">
            <div class="post-inner">
                <h4 class="post-title"><a class="text-darken" href="#">Ultimas Noticias</a></h4>

            @foreach($noticias as $noticia)
                <div class="thumb col-xs-12 visible-xxs">
                    <a class="hover-img img-shadow" href="#">
                        @if($noticia->images->count() != 0)
                            <img src="{{$noticia->images->first()->image}}" class="img-responsive">
                        @endif
                    </a>
                </div>
                <ul class="post-meta col-xs-12">
                    <h5 class="post-desciption col-sm-offset-3 col-sm-9">
                        {{$noticia->title}}
                    </h5>
                    <div class="col-sm-offset-3 col-sm-9">
                        <li><i class="fa fa-calendar fa-blue"></i><a href="#">23 February, 2013</a>
                        </li>
                        <li><i class="fa fa-user fa-blue"></i><a href="#">Ahagai</a>
                        </li>
                    </div>
                    <div class="thumb col-sm-3 hidden-xs">
                        <a class="hover-img img-shadow" href="#">
                            @if($noticia->images->count() != 0)
                                <img src="{{$noticia->images->first()->image}}" class="img-responsive">
                            @endif
                        </a>
                    </div>

                    <br>

                    {{$noticia->copete}}
                    <br>
                    <a class="btn btn-small btn-primary btn-noticia" href="{{route('news_detail',$noticia->id)}}">Leer</a>
                </ul>


        @endforeach
            </div>
        </div>

    @endsection

    @section('pre-footer')
        <div class="parallax-window" data-parallax="scroll" data-image-src="web/img/204803.png" data-z-index="0">
            <h5 class="owl-cap-title fittext">DESCUBRA LA RUTA DE LOS SABORES MISIONEROS</h5>
            <div class="owl-cap-price"><small></small>
                <h5>Gastronomia</h5>
            </div>
        </div>
    @endsection
@stop
