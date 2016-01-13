<div class="sidebar right-sidebar widget-area-5">

  <div class="widget widget_nav_menu">

    <div class="menu-all-pages-container">
      <ul class="menu" id="menu-all-pages">
        @foreach($torneos as $torneo)
          <h2 class="widget-title">
            <div class="categoria-container-xs titulo-categoria-xs" style="border-bottom-color: {{$categoria->color_bottom}};border-top-color: {{$categoria->color_bottom}};border-left-color: {{$categoria->color_bottom}}">
              <div class="color-top" style="background-color: {{$categoria->color_top}};"></div>
              <div class="color-bottom" style="background-color: {{$categoria->color_bottom}};">
                <h2>{{$torneo->name}}</h2>
              </div>
            </div>
            {{--<img src="{{asset('assets/web/images/f11.png')}}" width="201" height="38" alt=""/>--}}
          </h2>

          {{--<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{asset("web/destacado")}}"><b>{{$torneo->name}}</b></a></li>--}}
          @foreach($fases->where('tournaments_id',$torneo->id) as $fases)
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">{{$fases->name}}</a>
              <ul class="sub-menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{route('resultado')}}">Posiciones y Resultados</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{asset("web/proxima_fecha")}}">Proxima Fecha</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/fixture")}}">Fixture</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/sancion")}}">Sanciones</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/goleador")}}">Goleadores</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{asset("web/fairplay")}}">Fair Play</a></li>
              </ul>
          @endforeach
        @endforeach
      </ul>
    </div>
  </div>

</div>
<!-- right-sidebar -->