@extends('index')

@section('content')


   @foreach($week as $fases)

       <table class="table">

           <tr><td colspan="11" class="bg-success text-center">FECHA {{$fases->name}}</td></tr>
                <tr>

                    <td>Nro.</td>
                    <td>Fecha</td>
                    <td>Hora</td>
                    <td>Equipo</td>
                    <td></td>
                    <td></td>

                    <td>Equipo</td>
                    <td>Sede</td>
                    <td>Cancha</td>

                    <td>Estado</td>
                    <td></td>



                </tr>

            <tbody>

                @foreach($fases->Matches as $match)
                    <tr>
                        <td>{{$match->name}}</td>
                        <td>{{$match->date}}</td>
                        <td>{{$match->hour}}</td>
                        <td>{{$match->HomeTeam->name}} </td>
                        <td><label class="label label-danger">0</label></td>
                        <td><label class="label label-danger">0</label></td>
                        <td>{{$match->AwayTeam->name}}</td>
                        <td>{{$match->Canchas->Sedes->name or 'a Conf.'}}</td>
                        <td>{{$match->Canchas->name or 'a Conf.'}}</td>
                        <td>{{$match->status}}</td>
                        <td><a href="{{route('matchesGetEdit',[$match->id,$fases->fases_id] )}}" class="btn btn-xs btn-default">Editar</a> </td>

                    </tr>
                @endforeach

            </tbody>
       </table>

    @endforeach

@endsection

@stop

