<!-- Navigation -->
<nav class="bar navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" >nav { Coder }</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <li>
            {{Auth::user()->email}}
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li><a href="{{route('userProfileEdit')}}"><i class="fa fa-user fa-fw"></i>Perfil</a>
                </li>
                <li class="divider"></li>
                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Salir </a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li class="sidebar-search">
                    Empresa
                </li>

                <li>
                    <a  href="{{route('home')}}"><i class="fa fa-home fa-fw"></i></a>
                </li>

                <?php
                    $roles = new App\Http\Repositories\config\ModulesRepo;
                ?>

                @foreach(\App\Entities\Menus::where('main',0)->get() as $menu)

                    @if($menu->routes == '' )
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                {{$menu->name}} <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                @foreach(\App\Entities\Menus::where('main',$menu->id)->get() as $sub)

                                    @if($roles->buscarRoles($sub->routes ,'list') == 1 )
                                         <li><a href="{{route($sub->routes)}}">{{$sub->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a href="{{route($menu->routes)}}">{{$menu->name}}</a></li>
                    @endif

                @endforeach



        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>