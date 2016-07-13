@extends('index')
@section('css')
    <link rel="stylesheet" href="assets/inspinia/css/style2.css">
@endsection
@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h3>{{$derivation->Clients->full_name}}</h3>
            <hr>
            Observaciones : <strong> {{$derivation->observaciones}} </strong>
            <br>
            Fecha Inicio : <strong>{{$derivation->created_at}}</strong>
            <br>
            Usuario : <strong>{{$derivation->Users->full_name}}</strong>

        </div>
        <div class="panel-body">

        <div class="col-xs-6">
            @if(isset($model))
                {!! Form::model($model,['route' => $routePostEdit , 'files'=>'true']) !!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif
            {!! Form::hidden('users_id', Auth::user()->id)!!}

            {!! Form::hidden('derivations_id',$derivation->id)!!}

            {!! Form::textAreaCustom('message','Mensaje')!!}

            {!! Form::submit('Guardar Mensaje',['class'=>'btn'])!!}
            {!! Form::close()!!}
        </div>

            <div class="col-xs-6">
                <div id="vertical-timeline" class="vertical-container light-timeline">
                    @foreach($history as $h)
                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon yellow-bg">
                                <i class="fa fa-phone"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>{!! $h->users->fullName !!}</h2>
                                {!! $h->message !!}
                                <span class="vertical-date">{!! $h->dateForHuman() !!}<br><small>{!! $h->created_at !!}</small></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>



        <div class="panel-footer">
        <a href="{{route('derivationsEnd',$derivation->id)}}" class="btn btn-success">Finalizar Derivación</a>
        </div>
    </div>

@endsection

@stop