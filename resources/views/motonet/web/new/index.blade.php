@extends('motonet.web.new.templateNuevo2')

@section('fbq')
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

@section('promos')
    @include('motonet.web.new.index.mainPromos')
@endsection

@section('sideContent')
    @include('motonet.web.new.index.slider')
@endsection

@section('content')

<div class="row">
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

@endsection
