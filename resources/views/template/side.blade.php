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
                    <span>Home</span>
                </a>
            </li>

            @foreach( App\Http\Repositories\config\MenusRepo::build() as $m => $k)

                    @if(is_array($k))

                    <li>
                        <a href="#{{$m}}" data-toggle="collapse">
                            <span >{{$m}}</span>
                        </a>
                        <ul id="{{$m}}" class="nav sidebar-subnav collapse">

                            @foreach($k as $sub => $r)
                                <li class="">
                                    <a class="menu" data-id="{{$r}}" href="{{route($r)}}">
                                        <span>{{$sub}}</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>

                    @else
                        <li class=" ">
                            <a class="menu" data-id="{{$m}}" href="{{route($k)}}" title="{{$m}}">
                                <span>{{$m}}</span>
                            </a>
                        </li>
                    @endif
            @endforeach






        </ul>
        <!-- END sidebar nav-->
    </nav>
</div>

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
