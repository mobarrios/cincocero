@extends('tfc/web/template')
    @section('content')
        @include('tfc/web/leftbar/leftbar')
        <div class="center-col">

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                    <div class="categoria-container titulo-categoria" style="border-bottom-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif">
                        <div class="color-top" style="background-color: @if($categoriaActual){{$categoriaActual->color_top}}@else{{'#0f5128'}}@endif;"></div>
                        <div class="color-bottom" style="background-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif;">
                            <h2>FECHA ACTUAL</h2>
                        </div>
                    </div>

                  <p>&nbsp;</p>
                </div>
                @if(count($fase) == 0)
                    @include('tfc/web/includes/sinDatos')
                @else
                    <table border="1" bordercolor="#dddddd" class="table table-hover table-striped table-responsive">
                        <tbody>
                        <tr>
                            <td colspan="2" align="center" class="success">Fecha N° {!! $fase->name !!}</td>
                            <td colspan="2" align="center" class="success">&nbsp;</td>
                            <td colspan="2" align="center" class="success">&nbsp;</td>
                            <td colspan="2" align="center" class="success">&nbsp;</td>
                            <td colspan="2" align="center" class="success">&nbsp;</td>
                            <td colspan="2" align="center" class="success"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" class="success">Equipo</td>
                            <td colspan="2" align="center" class="success">&nbsp;</td>
                            <td colspan="2" align="center" class="success">Equipo</td>
                            <td colspan="2" align="center" class="success">Hora</td>
                            <td colspan="2" align="center" class="success">Sede</td>
                            <td colspan="2" align="center" class="success">Campo</td>
                        </tr>
                    @foreach($fase->matches as $partido)

                            <tr>
                                <td colspan="2" align="center">{!! $partido->homeTeam->name or 'Libre'!!}</td>
                                <td colspan="2" align="center">vs</td>
                                <td colspan="2" align="center">{!! $partido->awayTeam->name  or 'Libre'!!}</td>
                                <td colspan="2" align="center">{!! $partido->hour or 'A confirmar'!!}</td>
                                <td colspan="2" align="center">{!! $partido->canchas->sedes->name or ''!!}</td>
                                <td colspan="2" align="center">{!! $partido->canchas->name or ''!!}</td>
                            </tr>

                    @endforeach
                        </tbody>
                    </table>

                @endif
                <p>&nbsp;</p>
                <center><!-- row --></center>
                <!-- row --><!-- row --><!-- row -->

                <div class="row"></div>
                <!-- row --><!-- row --><!-- row --><!-- row --><!-- row --><!-- row -->

            </div>
            <!-- elements-box -->

        </div>
        <!-- center-col -->
        @include('tfc/web/sidebar/sidebar')
    @endsection