@extends('index')

@section('content')

    <div class="panel">
        <div class="panel-body">
            <span>Total de Inscripciones </span> :  <strong>{{$clients_all->count()}}</strong><br>
            <span>Total de Inscripciones  sin  Confirmar </span> :  <strong>{{$clients_no_confirm->count()}}</strong><br>
        </div>
        <table  id="dataTable" class="table ">
            <thead>
            <th>Codigo</th>
            <th>Apellido Nombre</th>
            <th>Tel.</th>
            <th>Mail</th>
            <th>Estado</th>

            </thead>
            <tbody>
            @foreach($clients_all as $client)
            <tr>
                <td>{{$client->id}} </td>
                <td>{{$client->last_name}} {{$client->name}}</td>
                <td>{{$client->phone}} </td>
                <td>{{$client->email}}</td>

                @if($client->sorteo == 1)
                    <td><label class="label label-danger">Sin Confirmar</label></td>
                @else
                    <td><label class="label label-success">Confirmado</label></td>
                @endif

            </tr>
            @endforeach
            </tbody>
        </table>

        <div class="panel-footer">
            <a href="{{route('export')}}" class="btn btn-success"><span class="fa fa-file-excel-o"></span></a>
        </div>
    </div>
@endsection
@stop