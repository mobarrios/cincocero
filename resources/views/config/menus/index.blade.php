@extends('config/config')

    @section('content')

        <div class="row">
            <div class="col-xs-12">
                <a href="{{route($routeNew)}}"  class="pull-right btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
            </div>
            <hr>
            <div class="col-xs-12">

                @foreach($models as $model)
                    <div class="list-group">
                        @if($model->routes == '' )
                            <div  class="list-group-item active"> {{$model->name}} <a href="{{route('menusGetDel',$model->id)}}" class="delete btn btn-xs pull-right">Borrar</a> <a href="{{route('menusGetEdit',$model->id)}}"  class="btn btn-xs pull-right">Editar</a></div>

                            @foreach(\App\Entities\Menus::where('main',$model->id)->get() as $sub)
                                <div  class="list-group-item">{{$sub->name}}  <a href="{{route('menusGetDel',$sub->id)}}" class="delete btn btn-xs pull-right">Borrar</a> <a href="{{route('menusGetEdit',$sub->id)}}"  class="btn btn-xs pull-right">Editar</a> </div>
                            @endforeach

                        @else
                            @if($model->main == 0)
                                <div  class="list-group-item active"> {{$model->name}}<a href="{{route('menusGetDel',$model->id)}}" class="delete btn btn-xs pull-right">Borrar</a> <a href="{{route('menusGetEdit',$model->id)}}"  class="btn btn-xs pull-right">Editar</a> </div>

                            @endif
                        @endif
                    </div>
                @endforeach




            </div>
        </div>

    @endsection

@stop

