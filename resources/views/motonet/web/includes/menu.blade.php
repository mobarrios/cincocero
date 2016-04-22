<div class="m-t-15 container-fluid">
    <div class="container">
        <nav class="navbar2 navbar2-default">
            <div class="navbar2-header">
                <button class="navbar2-toggle" type="button" data-toggle="collapse" data-target=".js-navbar2-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>


            <div class="collapse navbar2-collapse js-navbar2-collapse">
                <div class="buscador visible-xs visible-sm">
                    <form action="{!! route('productFind') !!}" method="get" class="center-block">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" disabled><i class="fa fa-search"></i></button>
                                </span>
                                <input type="text" class="form-control" placeholder="Buscar"/>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Buscar</button>
                                </span>
                            </div>
                        </div>



                    </form>
                </div>

                <ul class="nav navbar2-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorías <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>

                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-sm-3">
                                <ul>
                                    {{--<li class="dropdown-header">Recomendados</li>--}}
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @if(\App\Entities\motonet\Brands::count() != 0)
                                                @foreach(\App\Entities\motonet\Brands::all() as $m)
                                                    @if($m->images->count() != 0)
                                                        <div class="item">
                                                            <a href="{!! route('productFind',['brands' => $m->id]) !!}"><img src="{!! $m->images->first()->image !!}" class="img-responsive" alt="{!! $m->name !!}"></a>
                                                        </div><!-- End Item -->
                                                    @endif
                                                @endforeach
                                            @else
                                                <div class="item active">
                                                    <a href="#"><img src="assets/web/img/logo.jpg" class="img-responsive" alt="Motonet"></a>
                                                </div>
                                            @endif
                                            {{--<div class="item">--}}
                                                {{--<a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>--}}

                                                {{--<br>--}}
                                                {{--<button class="btn btn-primary" type="button">Ver</button> <button href="#" class="btn btn-default" type="button">Comprar</button>--}}
                                                {{--<span class="middle-box">$14999</span>--}}
                                            {{--</div><!-- End Item -->--}}
                                        </div><!-- End Carousel Inner -->
                                    </div><!-- /.carousel -->
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Categorías</li>
                                    <li class="divider"></li>
                                    @if(\App\Entities\motonet\Categories::count() != 0)
                                        @foreach(\App\Entities\motonet\Categories::all() as $c)
                                            <li><a href="{!! route('productFind',['categories' => $c->id]) !!}">{!! $c->name !!}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Marcas</li>
                                    <li class="divider"></li>
                                    @if(\App\Entities\motonet\Brands::count() != 0)
                                        @foreach(\App\Entities\motonet\Brands::all() as $b)
                                            <li><a href="{!! route('productFind',['brands' => $b->id]) !!}">{!! $b->name !!}</a></li>
                                        @endforeach
                                    @endif

                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Modelos</li>
                                    <li class="divider"></li>
                                    @if(\App\Entities\motonet\Models::count() != 0)
                                        @foreach(\App\Entities\motonet\Models::all() as $mod)
                                            <li><a href="{!! route('productFind',['models' => $mod->id]) !!}">{!! $mod->name !!}</a></li>
                                        @endforeach
                                    @endif
                                    {{--<li class="dropdown-header">Newsletter</li>--}}
                                    {{--<form class="form" role="form">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label class="sr-only" for="email">Email address</label>--}}
                                            {{--<input type="email" class="form-control" id="email" placeholder="Enter email">--}}
                                        {{--</div>--}}
                                        {{--<button type="submit" class="btn btn-primary btn-block">Sign in</button>--}}
                                    {{--</form>--}}
                                </ul>
                            </li>
                        </ul>

                    </li>
                </ul>


                <div class="buscador pull-right hidden-xs hidden-sm">
                    <form action="{!! route('productFind') !!}" method="get" class="finder" class="center-block">
                        <div class="input-group-addon"><i class="fa fa-search"></i></div>
                        <input type="text" name="find" placeholder="Buscar"/>
                        {{--<select name="categoria" id="categoria">--}}
                        {{--<option value="0">Categoria</option>--}}
                        {{--<option value="1">Categoria 1</option>--}}
                        {{--<option value="2">Categoria 2</option>--}}
                        {{--<option value="3">Categoria 3</option>--}}
                        {{--<option value="4">Categoria 4</option>--}}
                        {{--<option value="5">Categoria 5</option>--}}
                        {{--</select>--}}
                        {{--<select name="producto" id="producto" >--}}
                        {{--<option value="0">Producto</option>--}}
                        {{--<option value="1">Producto 1</option>--}}
                        {{--<option value="2">Producto 2</option>--}}
                        {{--<option value="3">Producto 3</option>--}}
                        {{--<option value="4">Producto 4</option>--}}
                        {{--<option value="5">Producto 5</option>--}}
                        {{--</select>--}}
                        {{--<select name="marca" id="marca">--}}
                        {{--<option value="0">Marca</option>--}}
                        {{--<option value="1">Marca 1</option>--}}
                        {{--<option value="2">Marca 2</option>--}}
                        {{--<option value="3">Marca 3</option>--}}
                        {{--<option value="4">Marca 4</option>--}}
                        {{--<option value="5">Marca 5</option>--}}
                        {{--</select>--}}
                        {{--<select name="modelo" id="modelo">--}}
                        {{--<option value="0">Modelo</option>--}}
                        {{--<option value="1">Modelo 1</option>--}}
                        {{--<option value="2">Modelo 2</option>--}}
                        {{--<option value="3">Modelo 3</option>--}}
                        {{--<option value="4">Modelo 4</option>--}}
                        {{--<option value="5">Modelo 5</option>--}}
                        {{--</select>--}}
                        <button type="submit">Buscar </button>
                    </form>
                </div>
            </div><!-- /.nav-collapse -->
        </nav>





    </div>

</div>
