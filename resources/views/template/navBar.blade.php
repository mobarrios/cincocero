<nav class="navbar navbar-static-top navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>



                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Stock <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('items')}}">Items</a></li>
                    </ul>
                </li>

<<<<<<< HEAD
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contenidos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('staffs')}}">Staff</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Config<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('user')}}">Users</a></li>
                        <li><a href="{{route('profiles')}}">Profiles</a></li>
                        <li><a href="{{route('modules')}}">Modulos</a></li>

                    </ul>
                </li>

=======
>>>>>>> 2cb6436611e1ceec2f22567e85a6d0c9fb79de3e
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('userProfileEdit')}}">Perfil</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('logout')}}">Salir</a></li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>