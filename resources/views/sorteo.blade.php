@extends('index')

@section('content')

    <div class="panel">
        <div class="panel-body">
            <span>Total de Inscripciones </span> :  <strong>{{$clients_all->count()}}</strong><br>
            <span>Total de Inscripciones  Confirmadas </span> :  <strong>{{$clients_no_confirm->count()}}</strong><br>
        </div>


        <table  id="dataTable" class="table ">
            <thead>
            <th>Codigo</th>
            <th>Apellido Nombre</th>
            <th>Tel.</th>
            <th>Mail</th>
            </thead>
            <tbody>
            @foreach($clients_all as $client)
            <tr>
                <td>{{$client->id}} </td>
                <td>{{$client->last_name}} {{$client->name}}</td>
                <td>{{$client->phone}} </td>
                <td>{{$client->email}}</td>
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
@stop