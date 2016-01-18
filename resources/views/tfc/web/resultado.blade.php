@extends('tfc/web/template')
    @section('content')
      @include('tfc/web/leftbar/leftbar')

        <div class="center-col">

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                  <div class="categoria-container titulo-categoria" style="border-bottom-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};border-top-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};border-left-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}">
                    <div class="color-top" style="background-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_top}};"></div>
                    <div class="color-bottom" style="background-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};">
                      <h2>TABLA DE POSICIONES</h2>
                    </div>
                  </div>
                  {{--<p><img src="assets/web/images/tabla_pos.png" width="600" height="70" alt=""/></p>--}}
                  <p>&nbsp;</p>
                </div>
              <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                  <tbody>
                    <tr>
                      <td colspan="2" align="center" class="info">Escudo</td>
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
                          <td colspan="2" align="center" class="active"><a href="{{route('equipo',$tab->teams->id)}}">{!! $tab->teams->name !!}</a></td>
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
              <div class="categoria-container titulo-categoria" style="border-bottom-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};border-top-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};border-left-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}">
                <div class="color-top" style="background-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_top}};"></div>
                <div class="color-bottom" style="background-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};">
                  <h2>RESULTADO DE LA FECHA</h2>
                </div>
              </div>
                <p>&nbsp;</p>
                <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                  <tbody>
                  @foreach($resultado as $res)
                      @if(count($res->matches->where('status','2')) == 0)
                        @include('tfc/web/includes/sinDatos')
                      @else
                        @foreach($res->matches->where('status','2') as $match)

                          <tr>
                              <td colspan="6" align="center" class="success">Fecha {!! $res->name !!} - {!! $match->date !!} - {!! $match->hour !!} hs</td>
                          </tr>
                          <tr>
                            <td align="center" class="success">Equipo</td>
                            <td align="center" class="success"></td>
                            <td align="center" class="success"></td>
                            <td align="center" class="success">Equipo</td>
                          </tr>

                            <tr>
                              <td align="center" class="active">{!! $match->homeTeam->name !!}</td>
                              <td align="center" class="active">{!! $match->home_goals !!}</td>
                              <td align="center" class="active">{!! $match->away_goals !!}</td>
                              <td align="center" class="active">{!! $match->awayTeam->name !!}</td>
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