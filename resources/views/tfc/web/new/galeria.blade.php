@extends('tfc.web.new.template')

@section('content')
        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-1-1 uk-row-first">
                    <main id="tm-content" class="tm-content">                       
                        
                        
                        <div style="height: 54px;" class="uk-sticky-placeholder">
                            <div style="margin: 0px;" class="button-group filter-button-group" data-uk-sticky="{top:70}">
                                <div class="uk-container uk-container-center">
                                    <button class="active" data-filter="*">Imagenes</button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid uk-grid-collapse grid" data-uk-grid-match="">
                            @foreach($galeria as $imagen)
                                <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c26e2589e25045ad516b5bc37d18523a ">
                                    <div class="gallery-album">
                                        <a href="{!! $imagen->Images->first()->image or '' !!}" data-uk-lightbox="{group:'my-group'}" class="img-0"><img src="{!! $imagen->Images->first()->image or '' !!}" alt="{!! $imagen->name !!}"></a>
                                        <div class="titles">
                                            <div class="title">
                                                {!! strtoupper($imagen->name) !!}
                                            </div>
                                            <div class="sub-title">

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
@endsection

@section('js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.x-git.min.js"></script>
    <script>
        $('body').addClass('tt-gallery-page')
    </script>
@endsection
