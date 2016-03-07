<div class="center-col">

  <div class="elements-box">

    <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
      <div class="categoria-container titulo-categoria" style="border-bottom-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif">
        <div class="color-top" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_top}}@else{{'#0f5128'}}@endif;"></div>
        <div class="color-bottom" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif;">
          <h2>JUGADOR DESTACADO </h2>
        </div>
      </div>
      {{--<p><img src="assets/web/images/jug.png" width="600" height="70" alt=""/></p>--}}
      <p>&nbsp;</p>
    </div>

    @if(!is_null($jugadorDestacado))
      <table width="100%" border="0" class="table-responsive">
        <tbody>
        <tr>
          <td width="18%"><img src="{!! $jugadorDestacado->players->images->first()->image or '' !!}" width="180" height="195" alt=""/></td>
          <td width="8%">&nbsp;</td>
          <td width="74%"><table width="100%" class="table-responsive">
              <tbody>
              <tr>
                <td><h6 class="entry-title"> {!! $jugadorDestacado->players->fullName()!!}</h6>

                </td>
              </tr>
              <tr>
                <td> </td>
              </tr>
              <tr>
                <td></td>
              </tr>
              <tr>
                <td height="9"><h6 class="entry-title">Observaciones:</h6></td>
              </tr>
              <tr>
                <td>{!! $jugadorDestacado->observations !!}</td>
              </tr>
              <tr>
                <td></td>
              </tr>
              </tbody>
            </table></td>
        </tr>
        </tbody>
      </table>
    @endif
    <p>&nbsp;</p>

    <div class="categoria-container titulo-categoria" style="border-bottom-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif">
      <div class="color-top" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_top}}@else{{'#0f5128'}}@endif;"></div>
      <div class="color-bottom" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif;">
        <h2>EQUIPO DESTACADO</h2>
      </div>
    </div>
    {{--<p><img src="assets/web/images/equipo_fecha.png" width="600" height="70" alt=""/></p>--}}

    @if(!is_null($equipoDestacado))
      <table width="100%" border="0"  class="table-responsive">
        <tbody>
        <tr>
          <td width="18%"><img src="{!! $equipoDestacado->teams->images->first()->image  or ''!!}" width="450" height="302" alt=""/></td>
        </tr>
        </tbody>
      </table>
      <p>
      <h6 class="entry-title">Equipo:</h6>
      <p>
        {!! $equipoDestacado->teams->name !!}
      </p>
      <p>
      </p>
      <h6 class="entry-title">Nota:</h6>
      </p>
      <p>{!! $equipoDestacado->observations !!}</p>
      <p>&nbsp;</p>

    @endif
  </div>

</div>

<!-- center-col -->