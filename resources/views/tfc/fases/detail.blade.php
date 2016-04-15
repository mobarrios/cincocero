@extends('index')

@section('content')


   @foreach($week as $fases)

       <table class="table">

           <tr>
               <td colspan="11" class="bg-success text-center">FECHA {{$fases->name}} <span class="pull-right">
                       @if($fases->active)
                       <input  name="active" data="{{$fases->id}}" checked>
                        @else
                       <input  name="active" data="{{$fases->id}}">
                       @endif
                   </span></td>
            </tr>
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

                        <td>{{$match->HomeTeam->name or 'Libre' }} </td>
                        <td><h4><label class="label label-info">{{$match->home_goals or '-'}}</label></h4></td>
                        <td><h4><label class="label label-info">{{$match->away_goals or '-'}}</label></h4></td>
                        <td>{{$match->AwayTeam->name or 'Libre'}}</td>
                        <td>{{$match->Canchas->Sedes->name or 'a Conf.'}}</td>
                        <td>{{$match->Canchas->name or 'a Conf.'}}</td>
                        <td>
                            @if($match->status == 1)
                                <label class="label label-primary" >Por Jugar</label>
                            @elseif($match->status == 2)
                                <label class="label label-success" >Finalizado</label>
                            @elseif($match->status == 3)
                                <label class="label label-danger" >Suspendido</label>
                            @endif
                        </td>
                        <td>

                            @if(!is_null($match->AwayTeam) )
                                <a href="{{route('matchesGetFicha',[$match->id] )}}" target='blank' class="btn btn-xs btn-default">Ficha</a>

                                    <a href="{{route('matchesGetResult',[$match->id] )}}" class="btn btn-xs btn-default">Resultado</a>

                            @endif
                            <a href="{{route('matchesGetEdit',[$match->id,$fases->fases_id] )}}" class="btn btn-xs btn-default">Editar</a>
                        </td>


                    </tr>
                @endforeach

            </tbody>
       </table>

       <div class="btn-group">
           <a href='{{route('sanciones',$fases->id)}}'class="btn btn-md btn-default "> Sanciones @if(($fases->Sancion->count()!=0 )) <span class="label label-danger ">{{$fases->Sancion->count()}}</span> @endif</a>
          <!-- <a href='{{route('destacados',$fases->id)}}'class="btn btn-md btn-default "> Destacados</a> !-->

       </div>
    <hr>
    @endforeach

@endsection

    @section('js')
        <script>
            $('input[name="active"]').checkboxpicker({

                defaultClass: 'btn-xs btn-default',
                offClass: 'btn-xs btn-danger',
                onClass: 'btn-xs btn-success',
                offLabel: 'No',
                onLabel: 'Actual'
            });

            $('input[name="active"]').on('change',function(){

                if($(this).prop('checked'))
                    window.location.href = 'fasesWeekChange/1/'+$(this).attr('data');
                else
                    window.location.href = 'fasesWeekChange/0/'+$(this).attr('data');
            });

        </script>
    @endsection

@stop

