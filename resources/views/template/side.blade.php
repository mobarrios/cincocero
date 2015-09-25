

<div class="panel side panel-default">
    <div class="panel-heading">
        Menu
    </div>
    <div clss="panel-body">
        <ul class="nav nav-pills nav-stacked">

            <li><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>

            @foreach(\App\Entities\Menus::all() as $menu)

                @if($menu->main == 0 )
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            {{$menu->name}} <span class="caret"></span>
                        </a>
                        @foreach(\App\Entities\Menus::where('main',$menu->id)->get() as $sub)
                            <ul class="dropdown-menu">
                                <li><a href="{{route($sub->routes)}}">{{$sub->name}}</a></li>
                            </ul>
                        @endforeach
                    </li>


               @endif

            @endforeach

        </ul>
    </div>




</div>

