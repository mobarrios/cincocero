<footer id="footer" class="footer color-bg">
    <div class="links-social inner-top-sm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <!-- ============================================================= CONTACT INFO ============================================================= -->
                    <div class="contact-info">
                        <div class="footer-logo">
                            <div class="logo">
                                <a href=""{!! route('indexNueva') !!}">

                                    <img src="assets/web/img/logo.png" alt="" width="250">

                                </a>
                            </div><!-- /.logo -->

                        </div><!-- /.footer-logo -->

                        <div class="module-body m-t-20">

                        </div><!-- /.module-body -->

                    </div><!-- /.contact-info -->
                    <!-- ============================================================= CONTACT INFO : END ============================================================= -->            	</div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- ============================================================= CONTACT TIMING============================================================= -->
                    <div class="contact-timing">
                        <div class="module-heading">
                            <h4 class="module-title">Horario de atención</h4>
                        </div><!-- /.module-heading -->

                        <div class="module-body outer-top-xs">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr><td>Lunes a Viernes:</td><td class="pull-right">09.00 a 19.00</td></tr>
                                    <tr><td>Sabados:</td><td class="pull-right">09.00 a 19.00</td></tr>
                                    <tr><td>Domingos:</td><td class="pull-right">Cerrado.</td></tr>
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                            <p class='contact-number'>Atención telefónica: 0810-333-6686</p>
                        </div><!-- /.module-body -->
                    </div><!-- /.contact-timing -->
                    <!-- ============================================================= CONTACT TIMING : END ============================================================= -->            	</div><!-- /.col -->

                {{--<div class="col-xs-12 col-sm-6 col-md-3">--}}
                    {{--<div class="latest-tweet">--}}
                        {{--<div class="module-heading">--}}
                            {{--<h4 class="module-title">latest tweet</h4>--}}
                        {{--</div><!-- /.module-heading -->--}}

                        {{--<div class="module-body outer-top-xs">--}}
                            {{--<div class="re-twitter">--}}
                                {{--<div class="comment media">--}}
                                    {{--<div class='pull-left'>--}}
                    {{--<span class="icon fa-stack fa-lg">--}}
                      {{--<i class="fa fa-circle fa-stack-2x"></i>--}}
                      {{--<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>--}}
                    {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body">--}}
                                        {{--<a href="#">@laurakalbag</a> As a result of your previous recommendation :)--}}
                    {{--<span class="time">--}}
                        {{--12 hours ago--}}
                    {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="re-twitter">--}}
                                {{--<div class="comment media">--}}
                                    {{--<div class='pull-left'>--}}
                    {{--<span class="icon fa-stack fa-lg">--}}
                      {{--<i class="fa fa-circle fa-stack-2x"></i>--}}
                      {{--<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>--}}
                    {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body">--}}
                                        {{--<a href="#">@laurakalbag</a> As a result of your previous recommendation :)--}}
                    {{--<span class="time">--}}
                        {{--12 hours ago--}}
                    {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div><!-- /.module-body -->--}}
                    {{--</div><!-- /.contact-timing -->--}}
                {{--</div><!-- /.col -->--}}

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- ============================================================= INFORMATION============================================================= -->
                    <div class="contact-information">
                        <div class="module-heading">
                            <h4 class="module-title">Newsletter</h4>
                        </div><!-- /.module-heading -->

                        @include('motonet/web/new/index/newsLetter')

                        <div class="module-body outer-top-xs">

                        </div><!-- /.module-body -->
                    </div><!-- /.contact-timing -->
                    <!-- ============================================================= INFORMATION : END ============================================================= -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.links-social -->

    <div class="footer-bottom inner-bottom-sm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10">
                    <div class="module-heading outer-bottom-xs">
                        <h4 class="module-title">categorías</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body col-sm-4">
                        <ul class='list-unstyled'>
                            <li><a href="buscar/{!! 'categorias/motos/1' !!}">Motos</a></li>
                            <li><a href="buscar/{!! 'categorias/scooters/2' !!}">Scooters</a></li>
                            <li><a href="buscar/{!! 'categorias/custom/10' !!}">Custom</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                    <div class="module-body col-sm-4">
                        <ul class='list-unstyled'>
                            <li><a href="buscar/{!! 'categorias/ciclomotores/3' !!}">Ciclomotores</a></li>
                            <li><a href="buscar/{!! 'categorias/cuatriciclos/4' !!}">Cuatriciclos</a></li>
                            <li><a href="buscar/{!! 'categorias/generadores/5' !!}">Generadores</a></li>
                            </ul>
                    </div><!-- /.module-body -->
                    <div class="module-body col-sm-4">
                        <ul class='list-unstyled'>
                            <li><a href="buscar/{!! 'categorias/motobombas/6' !!}">Motobombas</a></li>
                            <li><a href="buscar/{!! 'categorias/bosqueyjardin/7' !!}">Bosque y Jardín</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->


                <div class="col-xs-12 col-sm-2">
                    <div class="module-heading outer-bottom-xs">
                        <h4 class="module-title">servicios</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li><a href="{!! route('indexNueva') !!}#accesorios">Accesorios</a></li>
                            <li><a href="{!! route('indexNueva') !!}#product-tabs-slider">Destacados</a></li>
                            <li><a href="{!! route('indexNueva') !!}#sucursales">Puntos de entrega</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div>
            </div>
        </div>
    </div>

    {{--<div class="copyright-bar">--}}
        {{--<div class="container">--}}
            {{--<div class="col-xs-12 col-sm-6 no-padding">--}}
                {{--<div class="copyright">--}}
                    {{--Copyright © 2014--}}
                    {{--<a href="home.html">Unicase Shop.</a>--}}
                    {{--- All rights Reserved--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-xs-12 col-sm-6 no-padding">--}}
                {{--<div class="clearfix payment-methods">--}}
                    {{--<ul>--}}
                        {{--<li><img src="assets/unicase/images/payments/1.png" alt=""></li>--}}
                        {{--<li><img src="assets/unicase/images/payments/2.png" alt=""></li>--}}
                        {{--<li><img src="assets/unicase/images/payments/3.png" alt=""></li>--}}
                        {{--<li><img src="assets/unicase/images/payments/4.png" alt=""></li>--}}
                        {{--<li><img src="assets/unicase/images/payments/5.png" alt=""></li>--}}
                    {{--</ul>--}}
                {{--</div><!-- /.payment-methods -->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</footer>