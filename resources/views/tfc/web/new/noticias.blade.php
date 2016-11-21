@extends('tfc.web.new.template')

@section('content')
        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-4-4 uk-push-4-1">
                   
                    <div class="contentpaneopen">
                       <main id="tm-content" class="tm-content">
                            <div class="uk-grid" data-uk-grid-match="">
                                @if($noticias->count() > 0)
                                    @foreach($noticias as $noticia)
                                        <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                            <div class="wrapper">
                                                <div class="img-wrap uk-flex-wrap-top">
                                                    <a href="#">
                                                    <img src="{!! $noticia->Images->first()->image or 'assets/web/images/noticiasDefault.jpg' !!}" class="img-polaroid" alt="">
                                                    </a>
                                                </div>
                                                <div class="info uk-flex-wrap-middle">
                                                    <div class="date">
                                                        {!! $noticia->date !!}
                                                    </div>
                                                    <div class="name">
                                                        <h4>
                                                            <a href="#">
                                                                {!! $noticia->title !!}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="text">
                                                        <p>{!! $noticia->description !!}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                @endif
                            </div>

                           {!! $noticias->render() !!}
                                {{--<div class="pagination">--}}
                                    {{--<ul class="pagination-list">--}}
                                        {{--<li class="pagination-start"><span class="pagenav">Start</span></li>--}}
                                        {{--<li class="pagination-prev"><span class="pagenav">Prev</span></li>--}}
                                        {{--<li><span class="pagenav">1</span></li>--}}
                                        {{--<li><a href="#" class="pagenav">2</a></li>--}}
                                        {{--<li class="pagination-next"><a data-original-title="Next" title="" href="#" class="hasTooltip pagenav">Sig</a></li>--}}
                                        {{--<li class="pagination-end"><a data-original-title="End" title="" href="#" class="hasTooltip pagenav">Ant</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                <div class="clearfix"></div>

                        </main>
                    </div>
   

                </div>
                
            </div>
        </div>
@endsection