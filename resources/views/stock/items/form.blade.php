@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif


        {!! Form::label('Codigo')!!}
        {!! Form::text('code',null,['class'=>'form-control']) !!}
        {!! Form::label('Articulo')!!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
        {!! Form::label('Descripcion')!!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}

        {!! Form::label('Imagen')!!}
        {!! Form::file('image')!!}

<<<<<<< HEAD
        {!! Form::label('Categoria')!!}
        {!! Form::select('')!!}

        {!! Form::label('Marca')!!}
        {!! Form::select('')!!}
        {!! Form::selectCategories()!!}
=======
        {!! Form::selectEntity('name','Marcas',$brands)!!}
>>>>>>> master

        <br>
        @if(isset($model))
            <table>
                <tr>
                @foreach($model->Images as $image)

                    <td style="padding-left: 5px;">
                            <a href="{{route('deleteImage',$image->id)}}">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                            <img class="thumbnail" src="{{$image->image}}" width="150px">
                    </td>


                @endforeach
                </tr>

            </table>
        @endif

        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop