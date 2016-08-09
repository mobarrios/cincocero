@extends('index')

@section('css')
    <link href="assets/css/playoff.css" rel="stylesheet">
@endsection

@section('content')

    <div class="table-responsive">
        <table  class=" table table-bordered">
            <thead>
                <td>Pos.</td>
                <td>Equipo</td>
                <td>Ptos.</td>
                <td>PJ</td>
                <td>PG</td>
                <td>PE</td>
                <td>PP</td>
                <td>GF</td>
                <td>GC</td>
                <td>DG</td>
            </thead>
            <tbody>


            @foreach($tablas as $tabla)
                <tr>
                    <td>{{$pos}}</td>
                    <td>{{$tabla->teams->name}} </td>

                    <td><input size="3" class="edit" data-col="pts" data-id="{{$tabla->id}}" type="text" value="{{$tabla->pts}}"></td>
                    <td><input size="3" class="edit" data-col="pj"  data-id="{{$tabla->id}}" type="text" value="{{$tabla->pj}}"></td>
                    <td><input size="3" class="edit" data-col="pg"  data-id="{{$tabla->id}}" type="text" value="{{$tabla->pg}}"></td>
                    <td><input size="3" class="edit" data-col="pe"  data-id="{{$tabla->id}}" type="text" value="{{$tabla->pe}}"></td>
                    <td><input size="3" class="edit" data-col="pp"  data-id="{{$tabla->id}}" type="text" value="{{$tabla->pp}}"></td>
                    <td><input size="3" class="edit" data-col="gf"  data-id="{{$tabla->id}}" type="text" value="{{$tabla->gf}}"></td>
                    <td><input size="3" class="edit" data-col="gc"  data-id="{{$tabla->id}}" type="text" value="{{$tabla->gc}}"></td>
                    <td><input size="3" class="edit" data-col="dg"  data-id="{{$tabla->id}}" type="text" value="{{$tabla->dg}}"></td>

                </tr>
                <?php $pos++ ?>
            @endforeach

            </tbody>
        </table>
        <p>Para modificar los datos , ingrese el nuevo dato y presione <strong>Enter</strong> .</p>
    </div>

    <div id="msg" hidden >
        <p class="alert alert-success">Dato Modificado Correctamente.</p>
    </div>

@endsection

    @section('js')
        <script>
            $('.edit').keypress(function(event){
                if ( event.which == 13 ) {
                    if(confirm('Desea Modificar este campo ?')){
                        var id      = $(this).attr('data-id');
                        var col     = $(this).attr('data-col');
                        var dato    = $(this).val();

                        $.get('edit_table/'+id+'/'+col+'/'+dato, function(data){
                            if(data)
                                $('#msg').show();

                        });
                    }

                }



            });
        </script>
    @endsection

@stop

