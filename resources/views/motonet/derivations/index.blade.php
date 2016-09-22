@extends('index')

    @section('content')

        <div class="panel ">
            <div class=" panel-heading">
                <button type="button" class="btn btn-sm btn-default"> <i class="fa fa-file-excel-o"></i> </button>
                <button type="button" class="btn btn-sm btn-default"> <i class="fa fa-print"></i> </button>
            </div>

            <div class=" panel-body">

                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#tab-1" aria-expanded="true">Pendientes <span class="label label-danger">{{$pendientes->count()}}</span></a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab-2" >Tomados  <span class="label label-warning">{{$tomados->count()}}</span></a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab-3" >Finalizados <span class="label label-success">{{$finalizados->count()}}</span></a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                @include('motonet.derivations.table_pendientes')
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane ">
                            <div class="panel-body">
                                @include('motonet.derivations.table_tomados')
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane ">
                            <div class="panel-body">
                                @include('motonet.derivations.table_finalizados')
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>



    @endsection

@stop

