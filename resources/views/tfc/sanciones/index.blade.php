@extends('index')

    @section('content')
                <div class="col-xs-12">
                    <a href="{{route($routeNew)}}"  class=" btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
                </div>

                <hr>

        <table id='dataTable' class="display table">
            <thead>
                <th>Equipo</th>
                <th>Jugador</th>
                <th>Sancion</th>
                <th>Hasta Fecha</th>
                <th></th>
            </thead>

            @foreach($models as $model)
                <tr>
                    <td>{{$model->Players->Teams->name}}</td>
                    <td>{{$model->Players->fullName()}}</td>
                    <td>{!! $model->sancion !!}</td>
                    <td>{{$model->endSancion->name}}</td>
                    <td>
                        <a class="btn btn-xs btn-default" href="{{route('sancionesGetEdit',$model->id)}}">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a class="delete btn btn-xs btn-default" href="{{route('sancionesGetDel' ,$model->id)}}">
                            <i class="delete fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>


    @endsection

@stop

