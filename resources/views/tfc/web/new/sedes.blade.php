@extends('tfc.web.new.template')

@section('content')
        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-4-4 uk-push-4-1">
                   
                    <div class="contentpaneopen">
                       <main id="tm-content" class="tm-content">
                            <div class="uk-grid" data-uk-grid-match="">
                                @foreach($sedes as $sede)
                                    <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                        <div class="wrapper">
                                            <div class="img-wrap uk-flex-wrap-top">
                                                <a href="#">
                                                    <img src="{!! $sede->Images->first()->image or '' !!}" class="img-polaroid" alt="">
                                                </a>
                                            </div>
                                            <div class="info uk-flex-wrap-middle">

                                                <div class="name">
                                                    <h4>
                                                        <a href="{!! route('new.sedeDetalle',[$route,$sede->id]) !!}">
                                                            {!! $sede->name !!}
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="text">
                                                    <p><a href="{!! route('new.sedeDetalle',[$route,$sede->id]) !!}">Ver mapa</a></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                            
                        </main>
                    </div>
   

                </div>
                
            </div>
        </div>
@endsection