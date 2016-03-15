@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

<<<<<<< HEAD

        {!! Form::label('Marca')!!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}

        {!! Form::label('Imagen')!!}
        {!! Form::file('image')!!}

        <br>
        @if(isset($model))
            <table>
                <tr>
                @foreach($model->Images as $image)

                    <td style="padding-left: 5px;">
                            <a href="{{route('deleteImage',$image->id)}}"><span class="glyphicon glyphicon-remove"></span></a>
                            <img class="thumbnail" src="{{$image->image}}" width="150px">

                    </td>


                @endforeach
                </tr>

            </table>
        @endif

=======
        {!! Form::textCustom('name', 'Marca')!!}
        {!! Form::imageCustom('image','Imagen')!!}
>>>>>>> f1b98233366ecf4d2ac81e49abe3f46210c0e58b
        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop