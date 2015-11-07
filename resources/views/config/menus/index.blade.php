@extends('config/config')

    @section('content')

        <div class="row">
            <div class="col-xs-12">
                <a href="{{route($routeNew)}}"  class="pull-right btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
            </div>
            <hr>
            <div class="col-xs-12">
                @foreach($models as $model)
                    @if($model->routes == '' )


                           <ul> {{$model->name}}
                        @foreach(\App\Entities\Menus::where('main',$model->id)->get() as $sub)
                             <li> {{$sub->name}}</li>
                        @endforeach

                            </ul>

                    @else
                        @if($model->main == 0)
                            <ul>

                            {{$model->name}}
                            </ul>
                        @endif
                    @endif
                @endforeach


            </div>
        </div>

    @endsection

@stop

