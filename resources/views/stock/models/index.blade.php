@extends('index')

    @section('content')




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

                            Registros Encontrados <strong>{{$models->count()}}.</strong>


                        </div>

                    </div>

                    @include('controls.table')

                   <?php $models->setPath('listitems') ?>
                    <div class="ibox-footer">
                        <span>
                            {!! $models->render() !!}
                        </span>
                    </div>




    @endsection

@stop

