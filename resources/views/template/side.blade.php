<div class="aside-inner">
    <nav data-sidebar-anyclick-close="" class="sidebar">
        <!-- START sidebar nav-->
        <ul class="nav">
            <!-- Iterates over all sidebar items-->
            <li class="nav-heading ">
                <span data-localize="sidebar.heading.HEADER">Menu Principal</span>
            </li>

            <li>
                <a class="menu" data-id="0" href="{{route('home')}}" title="Home">
                    <em class="icon-home"></em>
                    <span data-localize="sidebar.nav.DOCUMENTATION">Home</span>
                </a>
            </li>

            @foreach(\App\Entities\Menus::where('main',0)->get() as $menu)

                @if($menu->routes == '' )
                    <li>
                        <a href="#{{$menu->name}}" data-toggle="collapse">
                            <span >{{$menu->name}}</span>
                        </a>
                        <ul id="{{$menu->name}}" class="nav sidebar-subnav collapse">

                            @foreach(\App\Entities\Menus::where('main',$menu->id)->get() as $sub)
                                    @if(Auth::user()->Perfil->PermissionsByModule($sub->routes) == 1)
                                    <li class="">
                                        <a class="menu" data-id="{{$sub->id}}" href="{{route($sub->routes)}}">
                                            <span>{{$sub->name}}</span>
                                        </a>
                                    </li>
                                    @endif
                            @endforeach

                        </ul>
                    </li>
                @else
                    <li class=" ">
                        <a class="menu" data-id="{{$menu->id}}" href="{{route($menu->routes)}}" title="Home">
                            <em class="icon-home"></em>
                            <span data-localize="sidebar.nav.DOCUMENTATION">{{$menu->name}}</span>
                        </a>
                    </li>
                @endif


            @endforeach

        </ul>
        <!-- END sidebar nav-->
    </nav>
</div>

@section('js')
    <script>
        $(document).ready(function(){

            var menu_id = localStorage.getItem('menu_id');

            $('a[data-id='+menu_id+']').parent().addClass('active');

            $('a[data-id='+menu_id+']').parent().parent().addClass('in').parent().addClass('active');


        });

        $('.menu').on('click',function()
        {
            localStorage.setItem('menu_id',$(this).attr('data-id'));
        });


    </script>
@endsection