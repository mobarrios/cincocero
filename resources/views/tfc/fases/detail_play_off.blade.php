@extends('index')

@section('content')

    @foreach($fases_start as $fase => $k)
        <div class="panel panel-default">
            <div class=" panel-heading">
                <strong>{{$k}}</strong>
            </div>
            <div class=" panel-body">
                <table class="table" data-count="">
                    <tr>
                        <td colspan="11" class="bg-success text-center">FECHA <span class="btn btn-xs btn-default pull-right">Nuevo Partido</span></td>
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



                    </tbody>
                </table>
            </div>

            <div class=" panel-footer">
                <a class="btn btn-xs btn-default">Nueva Fecha</a>
            </div>

        </div>
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

            if($("#primeraVuelta")){
                var vuelta = parseInt((($("#primeraVuelta").attr("data-total")) / 2) + 1);
                $("table").each(function(pos){
                    var table = $("table")[pos];
                   if(parseInt($(table).attr("data-count")) == vuelta){
                       $(table).before("<div><h1>Vuelta</h1><hr></div>");
                   }
                });
            }

        </script>
    @endsection

@stop

