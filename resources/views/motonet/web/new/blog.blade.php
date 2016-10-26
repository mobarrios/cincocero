@extends('motonet.web.new.templateNuevo2')

@section('sideContent')
        <div class="body-content">
            <div class="container">
                <div class="row  outer-bottom-vs">
                    <div class="blog-page">
                        <div class="col-md-9">
                            @if($posts->count() > 0)
                                @foreach($posts as $post)
                                    <div class="col-xs-12 col-md-6 mt-10">
                                        <div class="blog-post  wow fadeInUp">
                                            <a href="{!! route("blogDetail",$post->id) !!}"><img class="img-responsive" src="{!! $post->Images->first()->image or ""!!}" alt="{!! $post->title !!}"></a>
                                            <h1><a href="{!! route("blogDetail",$post->id) !!}">{!! $post->title !!}</a></h1>
                                            {{--<span class="author">Michael</span>--}}
                                            <span class="review">{!! $post->commentsCount !!} comentarios</span>
                                            <span class="date-time">{!! $post->date !!}</span>
                                            <a href="{!! route("blogDetail", $post->id) !!}" class="btn btn-upper btn-primary read-more">Leer más</a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
