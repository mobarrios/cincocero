<nav class="navbar navbar-fixed-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a href="#" class="navbar-brand" style="color: white;">NavCoder </a>

        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <i class="fa fa-reorder"></i>
        </button>
    </div>
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
                <li>
                    <a href="{{route('userProfileEdit')}}"><i class="fa fa-user fa-fw"></i>Perfil</a>
                </li>
                <li class="divider"></li>
                <li>
                    Version : <strong> {{shell_exec('git describe --always --tags')}}</strong>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <li>
            <a id="logout" href="{{route('logout')}}">
                <i class="fa fa-sign-out"></i>
            </a>
        </li>
    </ul>

</nav>
