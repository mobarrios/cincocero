@extends('motonet.web.new.templateNuevo2')

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
