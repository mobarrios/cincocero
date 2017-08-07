@extends('motonet.web.new.templateNuevo2')

@section('fbq')
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-81463000-1', 'auto');
        ga('send', 'PageView');

    </script>
    <script>

        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','https://connect.facebook.net/en_US/fbevents.js');
    
        fbq('init', '165095643906274');

        fbq('track', 'ViewContent');

    </script>
@endsection

@section('sideContent')
    @include('motonet.web.new.index.slider')
@endsection


@section('content')


<div class="row">
    <div class="col-xs-12">
        <img src="https://todopago.com.ar/sites/todopago.com.ar/files/banner18cuotas_3.jpg" alt="" width="100%" />
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        @include('motonet.web.new.index.productosDestacados')
    </div>
</div>

<hr>

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
        @include('motonet.web.new.index.pagosYface')
                <!-- /.wide-banners -->

        <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

        <!-- ============================================== BEST SELLER ============================================== -->

        @include('motonet.web.new.index.masVendidos')
                <!-- ============================================== BEST SELLER : END ============================================== -->

        <!-- ============================================== ACCESORIOS ============================================== -->

        @include('motonet.web.new.index.accesorios')
        {{--<hr>--}}
        {{--@include('motonet.web.new.index.seguro')--}}

        {{--<hr>--}}
        {{--@include('motonet.web.new.index.servicioTecnico')--}}

        <!-- ============================================== END ACCESORIOS ============================================== -->

        <!-- ============================================== BLOG SLIDER ============================================== -->
        @include('motonet.web.new.index.nuestrosLocales')
                <!-- ============================================== BLOG SLIDER : END ============================================== -->


    </div><!-- /.homebanner-holder -->


    <!-- ============================================== CONTENT : END ============================================== -->
</div><!-- /.row -->
<!-- ============================================== BRANDS CAROUSEL ============================================== -->
@include('motonet.web.new.index.nuestrasMarcas')
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->

@include('motonet/web/new/index/leyenda')

@endsection