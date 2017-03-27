@extends('tfc.web.new.template')

@section('content')

        <div class="tm-bottom-a-box ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="contact-page">
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <div class="contact-title">
                                            <h2>{!! $sedes->name !!} </h2>
                                        </div>
                                        <div class="contact-text">Dirección: {!! $sedes->address !!}</div>
                                        <div class="contact-text">Telefono: {!! $sedes->phone !!}</div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="tm-bottom-b-box tm-full-width">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-b" class="tm-bottom-b uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="map-wrap">

                                <div class="contact-form-wrap uk-flex">
                                    <div class="uk-container uk-container-center uk-flex-item-1">
                                        <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1 uk-nbfc">
                                            <div id="map" class="center-block" data-direccion="{!! $sedes->address !!}" style="width:800px;height:600px;"></div>
                                         {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.4312651174223!2d-58.52500968417153!3d-34.74472757248102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccfa5acf25ef5%3A0xb86ad5063a8acb09!2sSETIA!5e0!3m2!1ses-419!2sar!4v1478519507232" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>--}}


                                         </div>
                                    </div>
                                </div>
                            </div>
                                                
                            </div>
                        </div>
                </section>
            </div>
        </div>
        <br><br>
@endsection
