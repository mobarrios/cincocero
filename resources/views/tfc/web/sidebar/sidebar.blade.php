<div class="sidebar right-sidebar widget-area-5">

  <div class="widget widget_nav_menu">

    <div class="menu-all-pages-container">
      <ul class="menu" id="menu-all-pages">
        @foreach(\App\Entities\tfc\Tournaments::where('categories_id',Session::get('categoria')->id)->get() as $torneo)
          <h2 class="widget-title">
            <div class="categoria-container-xs titulo-categoria-xs" style="border-bottom-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};border-top-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};border-left-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}">
              <div class="color-top" style="background-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_top}};"></div>
              <div class="color-bottom" style="background-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};">
                <h2>{{$torneo->name}}</h2>
              </div>
            </div>
            {{--<img src="{{asset('assets/web/images/f11.png')}}" width="201" height="38" alt=""/>--}}
          </h2>

          {{--<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{asset("web/destacado")}}"><b>{{$torneo->name}}</b></a></li>--}}
          @foreach(\App\Entities\tfc\Fases::where('tournaments_id',$torneo->id)->get() as $fas)
            <li class="menu-item menu-item-type-custom menu-item-object-custom @if(Session::get('fase') == $fas->id)folder-open @else folder-close" @endif <a href="javascript:void(0)">{{$fas->name}}</a>
              <ul class="sub-menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{route('destacado',$fas->id)}}">Destacado de la fecha</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{route('resultado',$fas->id)}}">Posiciones y Resultados</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{route("proximaFecha",$fas->id)}}">Proxima Fecha</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route("fixture",$fas->id)}}">Fixture</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route("sancion",$fas->id)}}">Sanciones</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route("goleador",$fas->id)}}">Goleadores</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route("fairplay",$fas->id)}}">Fair Play</a></li>
              </ul>
            </li>
          @endforeach
        @endforeach
      </ul>
    </div>
  </div>

</div>
<!-- right-sidebar -->

@section('js')
  <script src="assets/web/js/openFolder.js"></script>
@endsection