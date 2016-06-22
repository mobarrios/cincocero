@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
                <div class="panel-heading">
                    Operacion Nro.: <strong>{{$model->id}}</strong>
                </div>
                Fecha : {{$model->created_at}}
                <br>
                Cliente: {{$model->Clients->last_name}} {{$model->Clients->last_name}}
                <br>
                Medio de Pago: {{$model->MedioPago}}
                <br>
                         @if(isset($status_tp))
                            Mensaje : {{  $status_tp['Operations']['RESULTMESSAGE']}}
                            <br>
                            Codigo de Autorización :

                            @if(!empty($status_tp['Operations']['AUTHORIZATIONCODE']))
                                 {{ $status_tp['Operations']['AUTHORIZATIONCODE'] }}
                            @endif

                         @endif
                <br>


                Monto Abonado: $ {{$model->amount}}
                <hr>



            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif

                <label>Cliente</label>

                <div class="input-group">
                    @if(isset($model))
                        <input type="text" class="form-control" id="clients_name" value="{{$model->clients->full_name}}">
                        {!!  Form::hidden('clients_id',$model->clients_id) !!}
                    @else
                        <input type="text" class="form-control" id="clients_name" >
                        {!!  Form::hidden('clients_id') !!}

                    @endif
                <span class="input-group-btn">
                    <a class="search_modal btn btn-secondary"><span class="fa fa-search"></span> </a>
                </span>
            </div>


            {!! Form::selectCustom('medio_de_pago','Medio De Pago',$medios) !!}
            {!! Form::selectCustom('models_id','Modelo Relacionado',$modelos) !!}
            {!! Form::textCustom('amount','$ Importe') !!}


        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>
        </div>
    @endsection


@section('js')

    <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Clientes
                </div>
                <div class="modal-body">
                        <table id="dataTable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="no-sort" style="width: 12%;" ></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach(App\Entities\motonet\Clients::orderBy('last_name','ASC')->get() as $model)
                                <tr>
                                    <td>{{$model->dni}}</td>
                                    <td>{{$model->full_name}}</td>
                                    <td>{{$model->email}}</td>
                                    <td>{{$model->cel}}</td>
                                    <td>{{$model->phone}}</td>
                                    <td><button class="select_client btn btn-xs" client-id="{{$model->id}}" client-name="{{$model->full_name}}"><span class="fa fa-arrow-circle-o-right"></span> </button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.search_modal').on('click', function() {
            $('#myModal').modal('show');
        });

        $('.select_client').on('click',function(){
            $('#clients_name').val($(this).attr('client-name'));
            $('input[name="clients_id"]').val($(this).attr('client-id'));
            $('#myModal').modal('hide');
        });

    </script>
@endsection

@stop