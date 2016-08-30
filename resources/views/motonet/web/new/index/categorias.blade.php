<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categorias</div>
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            {{--
            @foreach(\App\Entities\motonet\Categories::all() as $categoria)
                <li class="dropdown menu-item">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {!! $categoria->name !!}</a>
                    <ul class="dropdown-menu mega-menu">
                        <li class="yamm-content">
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                        <li><a href="category.html">Marca</a></li>
                                    </ul>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </li><!-- /.yamm-content -->
                    </ul><!-- /.dropdown-menu -->
                </li><!-- /.menu-item -->
            @endforeach
            --}}

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Motos</a>
            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Scooters</a>
            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ciclomotores</a>
            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuatriciclos</a>
            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Generadores</a>
            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Motobombas</a>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bosque y Jardín</a>
            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accesorios</a>
            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Por Marcas</a>
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        <div class="row">
                            @foreach(\App\Entities\motonet\Brands::orderBy('name','ASC')->get() as $brand)
                            <div class="col-sm-12 col-md-3">
                                <ul class="links list-unstyled">
                                      <li>
                                          <img style="width: 100px;" class="img-thumbnail" src="{{$brand->Images->first()->image}}">
                                          <a href="category.html">{{$brand->name}}</a>
                                      </li>
                                </ul>

                            </div><!-- /.col -->
                            @endforeach
                        </div><!-- /.row -->
                    </li><!-- /.yamm-content -->
                </ul><!-- /.dropdown-menu -->
            </li><!-- /.menu-item -->

        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->