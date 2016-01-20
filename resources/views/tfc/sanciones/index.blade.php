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
            </thead>

            @foreach($models as $model)
                <tr>
                    <td>{{$model->Players->Teams->name}}</td>
                    <td>{{$model->Players->fullName()}}</td>
                    <td>{!! $model->sancion !!}</td>
                    <td>{{$model->endSancion->name}}</td>
                </tr>
            @endforeach
        </table>


    @endsection

@stop

