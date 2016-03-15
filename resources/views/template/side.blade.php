<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="text-center nav-header" style="background-image: none">
                <strong>The Futbol Company</strong>
            </li>
            <li>
                <a class="menu" data-id="0" href="{{route('home')}}"><i class="fa fa-home"></i> <span class="nav-label">Home <span class="label label-primary pull-right">NEW</span></span></a>
            </li>


            @foreach(\App\Entities\Menus::where('main',0)->get() as $menu)

                @if($menu->routes == '' )
                    <li>
                        <a href="#" >
                            {{$menu->name}}<span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            @foreach(\App\Entities\Menus::where('main',$menu->id)->get() as $sub)
                                <li><a class="menu" data-id="{{$sub->id}}" href="{{route($sub->routes)}}">{{$sub->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li><a class="menu" data-id="{{$menu->id}}" href="{{route($menu->routes)}}">{{$menu->name}}</a></li>
                @endif

            @endforeach


            <!--

            <li>
                <a href="#">
                    <i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="{{route('items')}}">Items</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="#">Second Level Item</a></li>
                    <li>
                        <a href="#">Second Level Item</a></li>
                    <li>
                        <a href="#">Second Level Item</a></li>
                </ul>
            </li>
            !-->

        </ul>

    </div>
</nav>

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