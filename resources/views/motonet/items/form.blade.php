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


            <div >

           @foreach($categories as $id => $name)
               <?php $checked = false; ?>

               @if(isset($model))
                    @foreach($model->Categories as $it_cat)
                        @if($it_cat->id == $id)
                            <?php $checked = true ?>
                        @endif
                    @endforeach
               @endif
               <label>
                   {{$name}}
               </label>
               {!! Form::checkbox('categories_id[]',$id,$checked) !!}

           @endforeach
            </div>

            {!! Form::selectCustom('brands_id','Marca',$brands) !!}

            {!! Form::selectCustom('models_id','Modelo',$modelos) !!}


            {!! Form::textAreaCustom('description','Descripción') !!}

            {!! Form::textCustom('cost_price', 'Precio de costo')!!}

            {!! Form::textCustom('sell_price', 'Precio de venta')!!}

            {!! Form::textCustom('observaciones', 'Observaciones')!!}

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
