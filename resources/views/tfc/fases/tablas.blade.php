@extends('index')

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

            @foreach($teams as $team)

                <?php
                   $a =  \App\Entities\tfc\Tablas::where('fases_id',$fases_id)
                           ->where('teams_id',$team->id)->first();
                ?>
                @if(!is_null($a))
                    @if($a->count() != 0)
                            <tr>
                                <td>{{$pos}}</td>
                                <td>{{$team->name}} </td>
                                <td>{{$a->pts}} </td>
                                <td>{{$a->pj}} </td>
                                <td>{{$a->pg}} </td>
                                <td>{{$a->pe}} </td>
                                <td>{{$a->pp}} </td>
                                <td>{{$a->gf}} </td>
                                <td>{{$a->gc}} </td>
                                <td>{{$a->dg}} </td>
                            </tr>
                        <?php $pos++ ?>
                    @endif
                @else

                        <tr>
                            <td>-</td>
                            <td>{{$team->name}} </td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>

                    @endif

            @endforeach


            </tbody>

        </table>
    </div>

@endsection

@stop

