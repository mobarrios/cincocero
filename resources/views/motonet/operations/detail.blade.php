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
                    <td><a href="{{route('clientsGetEdit',$model->Clients->id)}}" >{{$model->Clients->full_name}}</a></td>
                </tr>
                <tr>
                    <td>Pago</td>
                    <td>
                        <strong>{{$model->MedioPago}}</strong>
                        @if(!empty($status_tp))
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

                <tr>
                    <td>Estado</td>
                    <td>
                            @if($model->status == 'Finalizada')
                                <label class="label label-success">{{$model->status}}</label>
                            @else
                                <label class="label label-default">{{$model->status}}</label>
                            @endif
                    </td>
                </tr>

                <tr>
                    <td>Publicacion Nro.</td>
                    <td><a href="{{route('publicationsGetEdit',$model->publications_id)}}">{{$model->Publications->title}}</a></td>
                </tr>

                <tr>
                    <td>Modelo</td>
                    <td><strong>{{$model->PublicationModel}}</strong></td>
                </tr>
            </table>


         </div>
    </div>
@endsection
