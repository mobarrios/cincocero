@extends('index')

    @section('content')

        <div class="panel ">
            <div class=" panel-heading">
                <a href="{{route($routeNew)}}"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> </a>
                <button type="button" class="btn btn-sm btn-default"> <i class="fa fa-file-excel-o"></i> </button>
                <button type="button" class="btn btn-sm btn-default"> <i class="fa fa-print"></i> </button>
            </div>

            <div class=" panel-body">

                <label>Usuario</label>

                <label>Categoría</label>

                <label>Usuario</label>


            </div>
        </div>



    @endsection

@stop

