@extends('index')

    @section('content')
                <div class="col-xs-12">
                    <a href="{{route($routeNew)}}"  class=" btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
                </div>

                <hr>

                <div class="row">
                @foreach($models as $model)


                    @if(!is_null($model->Players))

                            <div class="col-xs-6">
                                <h3>Jugador de la Fecha</h3>
                                <div class="thumbnail">
                                    <img src="{{$model->Players->Images->first()->image or ''}}">
                                    <div class="caption">
                                        <h3>{{$model->Players->FullName()}}</h3>
                                        <p><strong>nota :</strong> {!! $model->nota !!}</p>
                                    </div>
                                </div>
                            </div>


                    @else

                            <div class="col-xs-6">
                                <h3>Equipo de la Fecha</h3>
                                <div class="thumbnail">
                                    <img src="{{$model->Teams->Images->first()->image or ''}}">
                                    <div class="caption">
                                        <h3>{{$model->Teams->name}}</h3>
                                        <p><strong>nota :</strong> {!! $model->nota !!}</p>
                                    </div>
                                </div>
                            </div>

                    @endif

                @endforeach
                </div>


    @endsection

@stop

