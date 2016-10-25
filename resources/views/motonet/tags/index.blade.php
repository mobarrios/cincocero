@extends('index')

    @section('content')

        <div class="panel ">
            <div class=" panel-heading">
                <a href="{{route($routeNew)}}"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> </a>
                <button type="button" class="btn btn-sm btn-default"> <i class="fa fa-file-excel-o"></i> </button>
                <button type="button" class="btn btn-sm btn-default"> <i class="fa fa-print"></i> </button>
            </div>

            <div class=" panel-body">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Pendiente <span class="label label-danger">{{$solicitado->count()}}</span></a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">En Proceso <span class="label label-warning">{{$en_proceso->count()}}</span></a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3">Finalizado <span class="label label-success">{{$finalizado->count()}}</span></a></li>

                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                @include('motonet.tags.table_pendientes')
                            </div>
                            <div id="tab-2" class="tab-pane">
                                @include('motonet.tags.table_en_proceso')
                            </div>
                            <div id="tab-3" class="tab-pane">
                                @include('motonet.tags.table_finalizadas')
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>



    @endsection

@stop

