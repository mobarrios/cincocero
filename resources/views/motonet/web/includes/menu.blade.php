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
                    <form action="{!! route('productGrid') !!}" method="get" class="" class="center-block">
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
                                    <li class="dropdown-header">Recomendados</li>
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                                <br>
                                                <button class="btn btn-primary" type="button">Ver</button> <button href="#" class="btn btn-default" type="button">Comprar</button>
                                                <span class="middle-box">$14999</span>
                                            </div><!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                                <br>
                                                <button class="btn btn-primary" type="button">Ver</button> <button href="#" class="btn btn-default" type="button">Comprar</button>
                                                <span class="middle-box">$14999</span>
                                            </div><!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                                <br>
                                                <button class="btn btn-primary" type="button">Ver</button> <button href="#" class="btn btn-default" type="button">Comprar</button>
                                                <span class="middle-box">$14999</span>
                                            </div><!-- End Item -->
                                        </div><!-- End Carousel Inner -->
                                    </div><!-- /.carousel -->
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Categorías</li>
                                    <li class="divider"></li>
                                    <li><a href="#">120cc</a></li>
                                    <li><a href="#">250cc</a></li>
                                    <li><a href="#">500cc</a></li>
                                    <li><a href="#">900cc</a></li>
                                    <li><a href="#">1000cc</a></li>
                                    <li><a href="#">1200cc</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Marcas</li>
                                    <li class="divider"></li>
                                    <li><a href="#">Honda</a></li>
                                    <li><a href="#">Yamaha</a></li>
                                    <li><a href="#">Kawasaki</a></li>
                                    <li><a href="#">Suzuki</a></li>
                                    <li><a href="#">Peugeot</a></li>
                                    <li><a href="#">Motomel</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Modelos</li>
                                    <li class="divider"></li>
                                    <li><a href="#">Honda Wave 110</a></li>
                                    <li><a href="#">Motomel B110</a></li>
                                    <li><a href="#">Guerrero G110 Trip</a></li>
                                    <li><a href="#">Honda CG150 Titan</a></li>
                                    <li><a href="#">Gilera Smash</a></li>
                                    <li><a href="#">Corven Energy 110</a></li>
                                    <li><a href="#">Honda XR 125 L</a></li>
                                    <li><a href="#">Honda XR 250</a></li>
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
                    <form action="{!! route('productGrid') !!}" method="get" class="finder" class="center-block">
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