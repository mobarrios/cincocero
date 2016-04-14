@extends('index')

    @section('content')
    <div class="panel">
        <div class="panel-body">

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif

        {!! Form::textCustom('code', 'Codigo')!!}
        {!! Form::textCustom('name', 'Articulo')!!}
        {{-- Form::textCustom('detail', 'Detalle') --}}

        {!! Form::selectCustom('brands_id','Marca',$brands) !!}


        {!! Form::fileCustom('image','Foto')!!}

        {!! Form::colorPicker('col','color')!!}



        </div>
        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

         </div>
    @endsection

    @section('js')
        <script>
            $("[name='brands_id']").on('change',function(){
                $.ajax();

                $(this).val();
            });
        </script>
    @endsection

@stop
