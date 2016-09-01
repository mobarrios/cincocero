@extends('motonet.web.new.templateNuevo2')

@section('css')
    <style>
        #mapa{
            width:100%;
        }
    </style>
@endsection

@section('sideContent')
    <div class="ontact-map outer-bottom-vs">
        <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.106531697598!2d-58.407109685113035!3d-34.60146756488537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca9263c15355%3A0x1c2da772336a039b!2sAv.+Pueyrred%C3%B3n+740%2C+C1032ABU+CABA!5e0!3m2!1ses!2sar!4v1472764724151" width="600" height="460"  style="border:0"></iframe>
    </div>
@endsection
@section('content')
    <div class="body-content">
        <div class="container">
            <div class="row inner-bottom-sm">
                <div class="contact-page">
                    <div class="col-md-9 contact-form">
                        <div class="col-md-12 contact-title">
                            <h4>Formulario de contacto</h4>
                        </div>
                        <div class="col-md-8 ">
                           {!!  Form::open(['route'=>'contactMail'])!!}

                                <div class="form-group">
                                    <label class="info-title" for="exampleInputName">Tu nombre <span>*</span></label>
                                    <input  type="text" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="Nombre" name="name">
                                </div>

                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
                                    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="nombre@dominio.com" name="email">
                                </div>


                                <div class="form-group">
                                    <label class="info-title" for="exampleInputTitle">Telefono de Contacto <span>*</span></label>
                                    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="Telefono" name="telefono">
                                </div>


                                <div class="form-group">
                                    <label class="info-title" for="exampleInputComments">Comentario <span>*</span></label>
                                    <textarea class="form-control unicase-form-control" name="comentario" id="exampleInputComments"></textarea>
                                </div>


                                <div class="col-md-12 outer-bottom-small m-t-20">
                                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Enviar</button>
                                </div>
                            {!!  Form::close()!!}
                    </div>
                    <div class="col-md-3 contact-info">
                        <div class="contact-title">
                            <h4>INFORMACIÓN</h4>
                        </div>
                        <div class="clearfix address">
                            <span class="contact-i"><i class="fa fa-map-marker"></i></span>
                            <span class="contact-span">PUEYRREDON 740, C.A.B.A , Buenos Aires.</span>
                        </div>
                        <div class="clearfix phone-no">
                            <span class="contact-i"><i class="fa fa-mobile"></i></span>
                            <span class="contact-span"> (0810) 333 6686</span>
                        </div>
                    </div>			</div><!-- /.contact-page -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection