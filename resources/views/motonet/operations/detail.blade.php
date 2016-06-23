@extends('index')

@section('content')
    <div class="panel">

        <div class="panel-body">

            <div class="panel-heading">
            <h4>Operacion Nro.: <strong>{{$model->id}}</strong></h4>
            </div>

            <table class="table table-striped">
                <tr>
                    <td>Fecha</td>
                    <td>{{$model->created_at}}</td>
                </tr>
                <tr>
                    <td>Cliente</td>
                    <td>{{$model->Clients->full_name}}</td>
                </tr>
                <tr>
                    <td>Pago</td>
                    <td>
                        <strong>{{$model->MedioPago}}</strong>
                        @if(isset($status_tp))
                            <br>
                            Mensaje : <label class="label label-success"> {{  $status_tp['Operations']['RESULTMESSAGE']}}</label>
                            <br>
                            Codigo de Autorización :
                            @if(!empty($status_tp['Operations']['AUTHORIZATIONCODE']))
                                <strong>  {{ $status_tp['Operations']['AUTHORIZATIONCODE'] }} </strong>
                            @endif
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Monto</td>
                    <td><span style="font-size: 12px; color: red"><strong>$ {{$model->amount}}</strong>  </span></td>
                </tr>

            </table>


         </div>
    </div>
@endsection
