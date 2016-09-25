@extends('index')

    @section('content')

        <div class="panel ">
            <div class=" panel-heading">
                <a href="{{route($routeNew)}}"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> </a>
                <a href="{{route('export')}}" type="button" class="btn btn-sm btn-success"> <i class="fa fa-file-excel-o"></i> </a>
                <button type="button" class="btn btn-sm btn-default"> <i class="fa fa-print"></i> </button>
            </div>

            <div class=" panel-body">

                    @include('controls.table')

            </div>
        </div>



    @endsection

@stop

