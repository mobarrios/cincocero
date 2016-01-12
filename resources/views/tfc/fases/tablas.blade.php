@extends('index')

@section('content')

    <div class="table-responsive">
        <table id="dataTable" class=" table table-bordered">
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
                <td>{{$tabla->Teams->name}} </td>
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

@endsection

@stop

