@extends('template.webTemplate')

    @section('content')
        <div class="container">
            </div>
        <div id="map-canvas" style="height:400px;"></div>
        <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-7">
                        <p>Podrás ponerte en contacto con nosotros a fin de solicitarnos información adicional o bien que no se encuentre en el sitio, solo completa el formulario y pronto recibiras una respuesta nuestra.</p>
                        <form class="mt30" method="POST" action="{{route('mail')}}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre y Apellido</label>
                                        <input class="form-control" type="text" name="name"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" name="email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mensaje</label>
                                <textarea class="form-control" name="mesaje"></textarea>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Enviar Mensaje" />
                        </form>
                    </div>
                    <div class="col-md-4">
                        <aside class="sidebar-right">
                            <ul class="address-list list">
                                <li>
                                    <h5>Email</h5><a href="#">info@ahgai.com.ar</a>
                                </li>
                                <li>
                                    <h5>Telefono</h5><a href="#">+ 54 3757 423613</a>
                                </li>

                                <li>
                                    <h5>Dirección</h5><address>Los Cedros 287 <br />Puerto Iguazú, Misiones</address>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="gap"></div>
            </div>
    @endsection

@stop