@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">
            @if(isset($model))
                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
            @else
                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
            @endif

                {!! Form::dateCustom('publication_date', 'Fecha de Publicacíon')!!}

                <label>Modelo</label>
                <select name='models_id' class="form-control">
                    @foreach($brands as $br)
                        <optgroup label="{{$br->name}}">
                            @foreach($br->Models as $m)
                                <option value="{{$m->id}}">{{$m->name}}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>

                {!! Form::textCustom('title', 'Titulo')!!}

                {!! Form::textCustom('price','Importe $')!!}

                {!! Form::textAreaCustom('description','Descripcion')!!}

                {!! Form::fileCustom('image','Imagen')!!}


                <!--
                <table class="table table-striped">
                   {{-- @foreach($items as $item)
                        <tr>
                            <td>
                                {!! Form::radio('items_id',$item->id)!!}
                            </td>
                            <td>{{$item->code}}</td>
                            <td>{{$item->name}}</td>
                            <td>$ {{$item->cost_price}}</td>
                        </tr>
                    @endforeach
                    --}}
                </table>
                -->
            <hr>

                <div class="checkbox c-checkbox pull-left mt0">
                    <label>
                        {!! Form::checkbox('destacado')!!}
                        <span class="fa fa-check"></span>Aviso Destacado.
                    </label>
                </div>

        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop