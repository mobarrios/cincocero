@extends('index')

@section('css')
    <link href="assets/css/playoff.css" rel="stylesheet">
@endsection

@section('content')
    @if($tablas->first()->fases_id != "")
        <div class="pull-left col-xs-12 col-md-2">
            <?php $count = 0; ?>
            @for($i = 0; $i < 16; $i++)
                <?php if($count == 0){ ?> <h4 class="text-center">Vs.</h4> <?php } ?>
                <div class="cruces col-xs-6 pull-left">
                    <div class="escudo">
                        <img src="escudos/{!! $i+1 !!}.png" alt="" >
                    </div>
                    <hr>
                    <h4>{!! $i !!}</h4>
                    <hr>
                    <h4>-</h4>
                </div>
                <?php $count++; if($count == 2){ $count = 0; echo "<span class='clearfix'></span></br>"; };?>
            @endfor
        </div>

        <div class="pull-left col-xs-12 col-md-2">
            <?php $count = 0; ?>
            @for($i = 0; $i < 8; $i++)
                <div class="cruces octavos col-xs-12 pull-left mt-50">
                    <div class="escudo">
                        <img src="escudos/{!! $i+1 !!}.png" alt="" >
                    </div>
                    <hr>
                    <h4>{!! $i !!}</h4>
                    <hr>
                    <h4>-</h4>
                </div>
                <?php $count++; if($count == 2){ $count = 0; echo " <span class='clearfix'></span></br><br><br>"; }else{ echo "<br><h4 class='text-center'>Vs.</h4>";};?>
            @endfor
        </div>


    @else
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
                    <td>{{$tabla->pts}} </td>
                    <td>{{$tabla->pj}} </td>
                    <td>{{$tabla->pg}} </td>
                    <td>{{$tabla->pe}} </td>
                    <td>{{$tabla->pp}} </td>
                    <td>{{$tabla->gf}} </td>
                    <td>{{$tabla->gc}} </td>
                    <td>{{$tabla->dg}} </td>
                </tr>
                <?php $pos++ ?>
            @endforeach


            </tbody>

        </table>
    </div>
    @endif
@endsection

@stop

