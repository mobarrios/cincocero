@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif

                {!! Form::dateCustom('date', 'Fecha')!!}

                {!! Form::textCustom('title', 'Titulo')!!}
                {!! Form::textAreaCustom('description', 'Descripción')!!}

                 {!! Form::fileCustom('image','Foto')!!}


                @if(isset($model))
                <h4>Comentarios</h4>
                    <table class="table">
                       @foreach($model->Comments as $comment)
                        <tr>
                            <td>{{$comment->created_at}}</td>
                            <td>"{{$comment->description}}"</td>
                            <td>

                            @if(!$comment->visible)
                                <a href="{{route('blogs_comments_status',[1,$comment->id])}}" class="text-danger "><span class="fa fa-circle-o"></span></a></td>
                            @else
                                <a href="{{route('blogs_comments_status',[0,$comment->id])}}" class="text-success  "><span class="fa fa-check-circle-o"></span></a></td>
                            @endif
                        </tr>
                        @endforeach


                    </table>
                @endif

        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>



        </div>

    @endsection

@stop