@extends('index')
@section('css')
    <link href="../../../../public/assets/css/chat.css" rel="stylesheet"/>
@endsection

    @section('content')

        <div class="panel ">
            {{--<div class=" panel-heading">--}}
                {{--<a href="{{route($routeNew)}}"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> </a>--}}
                {{--<button type="button" class="btn btn-sm btn-default"> <i class="fa fa-file-excel-o"></i> </button>--}}
                {{--<button type="button" class="btn btn-sm btn-default"> <i class="fa fa-print"></i> </button>--}}
            {{--</div>--}}

            <div class=" panel-body">
                @include('controls.chat')
            </div>
        </div>

    @endsection
@section('js')
    <script src="../../../../public/assets/js/chat.js"></script>
@endsection

@stop

