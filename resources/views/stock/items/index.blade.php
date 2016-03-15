@extends('index')

    @section('content')

<<<<<<< HEAD
        <div class="row">
            <div class="col-xs-12">
                <a href="{{route($routeNew)}}"  class="pull-right btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
            </div>
            <hr>
            <div class="col-xs-12">
                @include('controls.table')
            </div>
        </div>
=======



                    <div class="m-b-lg">
                        <div class="input-group">
                            <input type="text" placeholder="Buscar..." class=" form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-white"><i class="fa fa-search"></i> </button>
                            </span>
                        </div>
                        <div class="m-t-md">

                            <div class="pull-right">
                                <a href="{{route($routeNew)}}"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> </a>
                                <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-file-excel-o"></i> </button>
                                <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-print"></i> </button>
                            </div>

                            <strong>Registros Encontrados 61.</strong>

                        </div>

                    </div>

                    @include('controls.table')

                   <?php $models->setPath('listitems') ?>
                    <div class="ibox-footer">
                        <span>
                            {!! $models->render() !!}
                        </span>
                    </div>



>>>>>>> f1b98233366ecf4d2ac81e49abe3f46210c0e58b

    @endsection

@stop

