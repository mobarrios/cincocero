@extends('motonet.web.new.templateNuevo2')

@section('sideContent')

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="blog-page">
                    <div class="col-md-9">
                        <div class="product-item-holder size-big single-product-gallery small-gallery">
                                <div class="row">
                                    <div id="owl-single-product" class="blog-post owl-corousel">
                                        @foreach($post->Images as $ind => $img)
                                            <div class="single-product-gallery-item}" id="slide{!! $ind !!}">
                                                <a data-lightbox="image-1" data-title="Gallery" href="{!! $img->image !!}">
                                                    <img class="img-responsive" alt="" src="{!! $img->image!!}" data-echo="{!! $img->image!!}" />
                                                </a>
                                            </div><!-- /.single-product-gallery-item -->
                                        @endforeach
                                            {{--<div class="single-product-gallery-thumbs gallery-thumbs">--}}

                                                {{--<div id="owl-single-product-thumbnails">--}}
                                                        {{--@foreach($post->Images as $ind => $img)--}}
                                                            {{--<div class="item">--}}
                                                                {{--<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="{!! $ind !!}" href="#slide1">--}}
                                                                    {{--<img class="img-responsive" width="85" alt="" src="{!! $img->image !!}" data-echo="{!! $img->image !!}" />--}}
                                                                {{--</a>--}}
                                                            {{--</div>--}}
                                                        {{--@endforeach--}}
                                                {{--</div><!-- /#owl-single-product-thumbnails -->--}}



                                            {{--</div>--}}
                                            <!-- /.gallery-thumbs -->
                                    </div>
                                    <div class="customNavigation center-block text-center">
                                        <a class="btn prev btn-xs btn-primary">Anterior</a>
                                        <a class="btn next btn-xs btn-primary">Siguiente</a>
                                    </div>
                                </div>

                                <!-- /.single-product-slider -->



                                {{--<img class="img-responsive" src="{!! $post->Images->first()->image or ""!!}" alt="{!! $post->title !!}">--}}








                                <h1>{!! $post->title !!}</h1>
                                <span class="review">{!! $post->commentsCount === 1 ?  $post->commentsCount . " comentario" :  $post->commentsCount. " comentarios"!!}</span>
                                <span class="date-time">{!! $post->date !!}</span>
                                <p>{!! $post->description !!}</p>
                                {{--<div class="social-media">--}}
                                    {{--<span>Compartir post:</span>--}}
                                    {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                    {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                    {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                                    {{--<a href=""><i class="fa fa-rss"></i></a>--}}
                                    {{--<a href="" class="hidden-xs"><i class="fa fa-pinterest"></i></a>--}}
                                {{--</div>--}}
                            <hr>
                        <div class="blog-review wow fadeInUp mt-lg">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-review-comments">{!! $post->commentsCount === 1 ?  $post->commentsCount . " comentario" :  $post->commentsCount. " comentarios"!!}</h3>
                                </div>
                                @if($post->Comments->count() > 0)
                                    @foreach($post->Comments as $comentario)
                                        @if($comentario->visible == 1)
                                            <div class="col-xs-2">
                                                {{--<img src="assets/web/img/chat-user.jpg" alt="Responsive image" class="img-responsive img-border">--}}
                                                <i class="fa fa-user fa-xg fa-border-radius fa-border pull-right"></i>
                                            </div>
                                            <div class="col-xs-10 blog-comments outer-bottom-xs">
                                                <div class="inner-bottom-xs">
                                                    <h4>{!! $comentario->name . " | " . $comentario->email!!}</h4>
                                                    <span class="">
                                                        {!! $comentario->carbonDate !!}
                                                    </span>
                                                    <p>{!! $comentario->description !!}</p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        </div>
                        <div class="blog-write-comment m-t-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Deja un comentario</h4>
                                </div>
                                {!! Form::open(['route' => ['commentPost',$post->id],"method" => "post", 'class' => 'register-form', 'role' => 'form']) !!}
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputName">Nombre <span>*</span></label>
                                                {!! Form::text('name', null,['class' => "form-control unicase-form-control text-input",'placeholder' => 'Nombre'])!!}
                                            </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputName">Email <span>*</span></label>
                                                {!! Form::email('email', null,['class' => "form-control unicase-form-control text-input",'placeholder' => 'Email'])!!}
                                            </div>
                                    </div>

                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputName">Email <span>*</span></label>
                                                {!! Form::textarea('description', null,['class' => "form-control unicase-form-control text-input",'placeholder' => 'Comentario'])!!}
                                            </div>
                                    </div>

                                    {!! Form::hidden('blogs_id', $post->id) !!}

                                    <div class="col-md-12 outer-bottom-small m-t-20">
                                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Comentar</button>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $("#owl-single-product").owlCarousel({
            'singleItem' : true,
            'slideSpeed' : 100,
            'autoPlay' : true,
            'pagination' : true,
            'navigationText' : ['anterior','siguiente']
        });

        $(".next").click(function(){
            $("#owl-single-product").trigger('owl.next');
        })
        $(".prev").click(function(){
            $("#owl-single-product").trigger('owl.prev');
        })
    </script>

@endsection