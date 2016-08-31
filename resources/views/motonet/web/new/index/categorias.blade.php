<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categorias</div>
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">

            <li class="menu-item">
                <a href="{!! route('productFind',['categories' => 1]) !!}">Motos</a>
            </li><!-- /.menu-item -->

            <li class="menu-item">
                <a href="{!! route('productFind',['categories' => 2]) !!}">Scooters</a>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="{!! route('productFind',['categories' => 10]) !!}">Custom</a>
            </li><!-- /.menu-item -->
            <li class="menu-item">
                <a href="{!! route('productFind',['categories' => 3]) !!}">Ciclomotores</a>
            </li><!-- /.menu-item -->

            <li class="menu-item">
                <a href="{!! route('productFind',['categories' => 4]) !!}">Cuatriciclos</a>
            </li><!-- /.menu-item -->

            <li class="menu-item">
                <a href="{!! route('productFind',['categories' => 5]) !!}">Generadores</a>
            </li><!-- /.menu-item -->

            <li class="menu-item">
                <a href="{!! route('productFind',['categories' => 6]) !!}">Motobombas</a>
            </li><!-- /.menu-item -->
            <li class="menu-item">
                <a href="{!! route('productFind',['categories' => 7]) !!}">Bosque y Jardín</a>
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
                                          <a href="{!! route('productFind',['brands' => $brand->id]) !!}">{{$brand->name}}</a>
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