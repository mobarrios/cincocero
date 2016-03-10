@extends('tfc/web/template')
    @section('content')
      @include('tfc/web/leftbar/leftbar')

        <div class="center-col">

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                    <div class="categoria-container titulo-categoria" style="border-bottom-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif">
                        <div class="color-top" style="background-color: @if($categoriaActual){{$categoriaActual->color_top}}@else{{'#0f5128'}}@endif;"></div>
                        <div class="color-bottom" style="background-color: @if($categoriaActual){{$categoriaActual->color_bottom}}@else{{'#95b114'}}@endif;">
                            <h2>TABLA DE POSICIONES</h2>
                        </div>
                    </div>
                  {{--<p><img src="assets/web/images/tabla_pos.png" width="600" height="70" alt=""/></p>--}}
                  <p>&nbsp;</p>
                </div>
              <table border="1" bordercolor="#dddddd" class="table table-hover table-striped table-responsive">
                  <tbody>
                    <tr>
                      <td colspan="2" align="center" class="info"></td>
                      <td colspan="2" align="center" class="info">Equipo</td>
                      <td colspan="2" align="center" class="info">Pts.</td>
                      <td colspan="2" align="center" class="info">PJ</td>
                      <td colspan="2" align="center" class="info">PG</td>
                      <td colspan="2" align="center" class="info">PE</td>
                      <td colspan="2" align="center" class="info">PP</td>
                      <td colspan="2" align="center" class="info">GF</td>
                      <td colspan="2" align="center" class="info">GC</td>
                      <td colspan="2" align="center" class="info">DIF</td>
                    </tr>
                    @if(count($tablas) == 0)
                      @include('tfc/web/includes/sinDatos')
                    @else
                      @foreach($tablas as $tab)
                        <tr>
                          <td colspan="2" align="center" class="active"><img src="{!! $tab->teams->images->first()->image or 'assets/web/images/teamDefault.png'!!}" width="35" height="35" alt=""/></td>
                          <td colspan="2" align="center" class="active"><a href="{{route('equipo',[$categoriaActual->id,$tab->teams->id])}}">{!! $tab->teams->name or '' !!}</a></td>
                          <td colspan="2" align="center" class="active">{!! $tab->pts !!}</td>
                          <td colspan="2" align="center" class="active">{!! $tab->pj !!}</td>
                          <td colspan="2" align="center" class="active">{!! $tab->pg !!}</td>
                          <td colspan="2" align="center" class="active">{!! $tab->pe !!}</td>
                          <td colspan="2" align="center" class="active">{!! $tab->pp !!}</td>
                          <td colspan="2" align="center" class="active">{!! $tab->gf !!}</td>
                          <td colspan="2" align="center" class="active">{!! $tab->gc !!}</td>
                          <td colspan="2" align="center" class="active">{!! $tab->dg !!}</td>
                        </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>
              <div class="categoria-container titulo-categoria" style="border-bottom-color: {{$categoriaActual->color_bottom}};border-top-color: {{$categoriaActual->color_bottom}};border-left-color: {{$categoriaActual->color_bottom}}">
                <div class="color-top" style="background-color: {{$categoriaActual->color_top}};"></div>
                <div class="color-bottom" style="background-color: {{$categoriaActual->color_bottom}};">
                  <h2>RESULTADO DE LA FECHA</h2>
                </div>
              </div>
                <p>&nbsp;</p>
                <table border="1" bordercolor="#dddddd" class="table table-hover table-striped table-responsive">
                  <tbody>

                  @foreach($resultado as $res)

                      @if($res->count() == 0)
                          @include('tfc/web/includes/sinDatos')
                      @else

                          <tr>
                              <td colspan="6" align="center" class="success">Fecha {!! $res->name !!}</td>
                          </tr>
                          <tr>
                              <td align="center" class="success">Equipo</td>
                              <td align="center" class="success"></td>
                              <td align="center" class="success"></td>
                              <td align="center" class="success">Equipo</td>
                          </tr>
                            @foreach($res->Matches as $match)




                                <tr>
                                  <td align="center" class="active">{!! $match->HomeTeam->name or 'Libre' !!}</td>
                                  <td align="center" class="active">{!! $match->home_goals !!}</td>
                                  <td align="center" class="active">{!! $match->away_goals !!}</td>
                                  <td align="center" class="active">{!! $match->AwayTeam->name or 'Libre' !!}</td>
                                </tr>
                            @endforeach

                      @endif
                    @endforeach
                  </tbody>
                </table>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <center><!-- row --></center>
                <!-- row --><!-- row --><!-- row -->

                <div class="row"></div>
                <!-- row --><!-- row --><!-- row --><!-- row --><!-- row --><!-- row -->

            </div>
            <!-- elements-box -->

        </div>

      @include('tfc/web/sidebar/sidebar')
    @endsection