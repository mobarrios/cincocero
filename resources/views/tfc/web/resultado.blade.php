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



                        @foreach($tablas as $tab)

                          <tr>
                              <td colspan="2" align="center" class="active"><img src="assets/web/images/teamDefault.png" width="35" height="35" alt=""/></td>
                              <td colspan="2" align="center" class="active"><a href="{{route('equipo',[$categoriaActual->id,$faseActual->id,$tab->teams->id or 'jj'])}}">{!! $tab->teams->name or '' !!}</a></td>
                              <td colspan="2" align="center" class="active">{!! $tab->pts or '0' !!}</td>
                              <td colspan="2" align="center" class="active">{!! $tab->pj or '0' !!}</td>
                              <td colspan="2" align="center" class="active">{!! $tab->pg or '0' !!}</td>
                              <td colspan="2" align="center" class="active">{!! $tab->pe or '0' !!}</td>
                              <td colspan="2" align="center" class="active">{!! $tab->pp or '0' !!}</td>
                              <td colspan="2" align="center" class="active">{!! $tab->gf or '0' !!}</td>
                              <td colspan="2" align="center" class="active">{!! $tab->gc or '0' !!}</td>
                              <td colspan="2" align="center" class="active">{!! $tab->dg or '0' !!}</td>
                          </tr>
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
            </div>
            <!-- elements-box -->

        </div>

      @include('tfc/web/sidebar/sidebar')
    @endsection

