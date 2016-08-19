<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand bg-white" href="index"> <img src="assets/landing/img/SOFFEM.png"> </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="{!! route('webIndex') !!}#page-top">Home</a></li>
                    <li><a class="page-scroll" href="{!! route('webIndex') !!}#novedades">Novedades</a></li>


                    <li class="dropdown menu-dropdown">
                        <a href="">Clausura 2016<span class="caret"></span></a>
                        <div>
                            <ul id="menu">
                                <li class="title-menu parent-menu"><a href="">Primera Div. <span class="caret"></span></a></li>
                                <hr>
                                <li class="title-menu parent-menu"><a href="">Tercera Div.<span class="caret"></span></a></li>
                                <hr>
                                <li class="title-menu parent-menu"><a href="">Cuarta Div.<span class="caret"></span></a></li>

                            </ul>
                            <ul class="submenu">
                                <li class="title-menu"><a href="{!! route('fasesDetalle') !!}">Liga</a></li>
                            </ul>
                            <ul class="submenu">
                                <li class="title-menu"><a href="{!! route('fasesDetalle') !!}">Liga</a></li>
                                <li class="title-menu"><a href="{!! route('fasesDetalle') !!}">Liga</a></li>
                            </ul>
                            <ul class="submenu">
                                <li class="title-menu"><a href="{!! route('fasesDetalle') !!}">Liga</a></li>
                                <li class="title-menu"><a href="{!! route('fasesDetalle') !!}">Liga</a></li>
                                <li class="title-menu"><a href="{!! route('fasesDetalle') !!}">Liga</a></li>
                            </ul>
                        </div>
                    </li>


                    <li><a class="page-scroll" href="{!! route('webIndex') !!}#sedes">Sedes</a></li>
                    <li><a class="page-scroll" href="{!! route('historiaWeb') !!}">Historia</a></li>
                    <li><a class="page-scroll" href="{!! route('reglamentoWeb') !!}">Reglamento</a></li>
                    <li><a class="page-scroll" href="{!! route('webIndex') !!}#contact">Contacto</a></li>
                    <li><a class="page-scroll" href="{!! route('login') !!}#contact">Intranet</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

