@extends('template.webTemplate')
@section('content')
    <div class="row">
        <div class="col-md-9 col-md-offset-1">

<br>

{!! Form::open(['route'=>'searchMail'])!!}
<h3 class="text-center">Resultado  desde <strong>{{$from}}</strong> hasta <strong>{{$to}}</strong></h3>
            <ul class="booking-list">
                @foreach($dispo as $res)
                <li>
                    <a class="booking-item">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{$res->Establecimientos->Images->first()->image or ''}}" alt="{{$res->Establecimientos->name}}" title="{{$res->Establecimientos->name}}" />
                            </div>
                            <div class="col-md-7 ">
                                <h3 class="booking-item-title">{{$res->Establecimientos->name}}</h3>
                                <p class="text-small">{!!$res->Establecimientos->web!!}</p>
                                <p class="text-small">{{$res->Establecimientos->address}}</p>
                                <p class="label label-danger"><strong> {{$res->Rooms->tipo}}</strong></p>
                            </div>
                            <div class="col-md-1">
                                Seleccionar
                                <input type="checkbox" name="select[{{$res->Establecimientos->id}}]">
                            </div>


                        </div>
                    </a>
                </li>
                @endforeach


        </div>


    </div>
    <div class="col-md-9 col-md-offset-1">
        <p>El siguiente formulario se enviara directamente a los Establecimientos seleccionados de la lista de disponibilidad.</p>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nombre y Apellido</label>
                        <input class="form-control" name="name" type="text" required="required">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" name="email" type="text" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Mensaje</label>
                <textarea class="form-control" name="mesaje" required="required"></textarea>
            </div>
            <input class="btn btn-primary" value="Enviar Mensaje" type="submit" >
{!! Form::close()!!}
    </div>
@endsection
@stop