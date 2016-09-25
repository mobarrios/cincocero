<!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown m-t-n-55">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">


                            <li class="dropdown active">
                                <a href="{!! route('indexNueva') !!}"> Inicio</a>
                            </li>
                            <li class="dropdown">
                                <a href="{!! route('indexNueva') !!}#accesorios">Accesorios</a>
                            </li>
                            <li class="dropdown">
                                <a href="{!! route('indexNueva') !!}#product-tabs-slider">Destacados
                                    <span class="menu-label hot-menu hidden-xs">Nuevos Productos</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="{!! route('indexNueva') !!}#sucursales">Puntos de entrega
                                </a>
                            </li>
                            {{--<li class="dropdown">--}}
                                {{--<a href="{!! route('indexNueva') !!}#accesorios">--}}
                                    {{--<span class="menu-label hot-menu hidden-xs">Nuevo</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="{!! route('indexNueva') !!}#accesorios"> Servicio Técnico</a>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="{!! route('indexNueva') !!}#sucursales"> Sucursales</a>--}}
                            {{--</li>--}}
                            <li class="dropdown">
                                <a href="{!! route('contact') !!}"> Contactanos</a>
                            </li>


                        </ul><!-- /.navbar-nav -->
                        <div class="clearfix"></div>
                    </div><!-- /.nav-outer -->
                </div><!-- /.navbar-collapse -->

            </div><!-- /.nav-bg-class -->
        </div><!-- /.navbar-default -->
    </div><!-- /.container-class -->

</div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->