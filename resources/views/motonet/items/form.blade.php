@extends('index')
@section('css')
    <style>
        #canvasJCrop{
            width:48%;
            margin:1%;
        }
    </style>
@endsection
    @section('content')
    <div class="panel">
        <div class="panel-body">
            <div class="col-xs-6">
                {!! Form::fileCropCustom("fileCrop", "Subir remito") !!}
                <div id="remito"></div>
                <canvas id="canvasJCrop"></canvas>
            </div>
            <div class="col-xs-6">
                @if(isset($model))
                    {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
                @else
                    {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
                @endif


                {{--<div class="form-group">--}}
                    {{--<label>Subir remito:</label>--}}
                    {{--<input type="file" onchange="load_file()" id="picker" class="form-control">--}}
                    {{--<div id="main">--}}
                        {{--<canvas id="canvasJCrop"></canvas>--}}
                        {{--<div id="nose">--}}
                            {{--<p>No file loaded</p>--}}
                            {{--<p style="font-size: 25px"> Open a file first </p>--}}
                            {{--<p style="font-size: 15px">it's okay. I'll wait. </p>--}}
                            {{--<p style="font-size: 10px">no seriously, I can't move</p>--}}
                            {{--<p style="font-size: 8px">still waiting...</p>--}}
                        {{--</div>--}}
                        {{--<div id="transcription"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                    {!! Form::textCustom('code', 'Codigo')!!}
                    {{-- Form::textCustom('detail', 'Detalle') --}}


                <label>Modelo</label>
                <select name='models_id' class="form-control">
                    <option value="0">Seleccionar</option>
                    @foreach($brands as $br)
                        <optgroup label="{{$br->name}}">
                            @foreach($br->Models as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>

                    {!! Form::selectCustom('branches_id','Sucursal',$branches) !!}
                    {!! Form::textCustom('n_motor', 'Nro. Motor')!!}

                    {!! Form::textCustom('n_chasis', 'Nro. Chasis')!!}



                    {!! Form::textCustom('cost_price', 'Precio de costo')!!}

                    {!! Form::textCustom('sell_price', 'Precio de venta')!!}

                    {!! Form::textCustom('observaciones', 'Observaciones')!!}

                    {!! Form::fileCustom('image','Foto')!!}

                    {!! Form::colorPicker('col','color')!!}



                <div class="panel-footer">

                {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}

                {!! Form::close()!!}
                </div>
            </div>
        </div>
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
