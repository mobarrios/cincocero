@extends('index')

    @section('content')
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-content navy-bg ">
                    <strong>{{ trans('messages.welcome') }}</strong>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div>
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
        </div>

        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h1>{{Auth::user()->name}} {{Auth::user()->last_name}}</h1>
                    <div class="m-b-sm">
                            @if(Auth::user()->images->count() > 0)
                                <div class="btn btn-warning btn-circle btn-lg btn-outline div-profile-image">
                                    <img src="{!! Auth::user()->images->first()->image !!}" alt="foto de perfil">
                                </div>
                            @else
                            {{-- SI EL PETE NO TIENE IMAGEN QUE LE PONGA EL ICONITO --}}
                                <button class="btn btn-warning btn-circle btn-lg btn-outline" type="button">
                                    <i class="fa fa-user"></i>
                                </button>
                            @endif
                    </div>
                    <p class="font-bold">Ultima Conexión : <strong>hace 2 dias</strong></p>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h2>Tareas Pendientes</h2>
                    <small>Tareas a por realizar para el usuario.</small>
                    <ul class="todo-list m-t small-list">
                        <li>
                            <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                            <span class="m-l-xs todo-completed">Dar de Alta Usuarios</span>

                        </li>
                        <li>
                            <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                            <span class="m-l-xs  todo-completed">Cargar Productos</span>

                        </li>
                        <li>
                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                            <span class="m-l-xs">Cargar Proveedores</span>
                            <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                        </li>
                        <li>
                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                            <span class="m-l-xs">Venta Online</span>
                        </li>
                        <li>
                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                            <span class="m-l-xs">Administración</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>




    @endsection
@stop