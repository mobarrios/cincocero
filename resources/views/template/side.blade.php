

<div class="panel side panel-default">
    <div class="panel-heading">
        Menu
    </div>
    <div clss="panel-body">
        <ul class="nav nav-pills nav-stacked">

            <li><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>


            @foreach(\App\Entities\Menus::where('main',0)->get() as $menu)

                @if($menu->routes == '' )
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            {{$menu->name}} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            @foreach(\App\Entities\Menus::where('main',$menu->id)->get() as $sub)
                                    <li><a href="{{route($sub->routes)}}">{{$sub->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li><a href="{{route($menu->routes)}}">{{$menu->name}}</a></li>
                @endif

            @endforeach



        </ul>
    </div>




</div>

