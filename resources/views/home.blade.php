@extends('index')

    @section('content')
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel panel-body">
                    <div class="col-xs-6 text-center ">
                        @if(Auth::user()->images->count() != 0)
                            <img src="{!! Auth::user()->images->first()->image !!}" alt="Image" class="img-thumbnail img-circle img-responsive thumb96">
                        @else
                            <em class="fa fa-user fa-5x"></em>
                        @endif
                       <hr>
                        <a class="btn btn-xs btn-block btn-default" href="{{route('userProfileEdit')}}"><i class="icon-note"></i></a>

                    </div>
                    <div class="col-xs-6">
                        <h3 class="mt0">{{Auth::user()->name}} {{Auth::user()->last_name}}</h3>
                        <p class="text-muted">Grupo : {{Auth::user()->Perfil->profile}}</p>
                        <p class="text-muted">{{Auth::user()->email}}</p>
                        <p class="text-muted">Ultima Conexión : <strong>hace 2 dias</strong></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                    <div class="panel panel-body">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-danger m-r-sm">12</button>
                                   Stock Articulos
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary m-r-sm">28</button>
                                    Ventas
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info m-r-sm">15</button>
                                    Usuarios
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-info m-r-sm">20</button>
                                    Clientes
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success m-r-sm">40</button>
                                    Provee.
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger m-r-sm">30</button>
                                    Notifi.
                                </td>
                            </tr>

                            </tbody>
                        </table>
                </div>
            </div>
        </div>



        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel panel-body">
                    <h2>Tareas Pendientes</h2>

                            <div class="checkbox c-checkbox pull-left mt0">
                                <label>
                                    <input name="remember" type="checkbox">
                                    <span class="fa fa-check"></span>Dar de Alta Usuarios
                                </label>
                            </div>

                    <div class="checkbox c-checkbox pull-left mt0">
                        <label>
                            <input name="remember" type="checkbox">
                            <span class="fa fa-check"></span>Dar de Alta Usuarios
                        </label>
                    </div>
                    <div class="checkbox c-checkbox pull-left mt0">
                        <label>
                            <input name="remember" type="checkbox">
                            <span class="fa fa-check"></span>Dar de Alta Usuarios
                        </label>
                    </div>
                    <div class="checkbox c-checkbox pull-left mt0">
                        <label>
                            <input name="remember" type="checkbox">
                            <span class="fa fa-check"></span>Dar de Alta Usuarios
                        </label>
                    </div>
                    <div class="checkbox c-checkbox pull-left mt0">
                        <label>
                            <input name="remember" type="checkbox">
                            <span class="fa fa-check"></span>Dar de Alta Usuarios
                        </label>
                    </div>
                    <div class="checkbox c-checkbox pull-left mt0">
                        <label>
                            <input name="remember" type="checkbox">
                            <span class="fa fa-check"></span>Dar de Alta Usuarios
                        </label>
                    </div>

                </div>

            </div>

        </div>




    @endsection
@stop