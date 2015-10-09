@extends('index')

    @section('content')

        @if(isset($model))
            {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
        @else
            {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
        @endif
        <table id="dataTable" class="table table-striped ">
            <thead>
                <tr>
                    <th width="10px"><input type="checkbox" id="selectAllRooms"> </th>
                    <th>
                        Habitacion
                    </th>
                    <th>
                        Tipo
                    </th>
                </tr>
             </thead>
            <thbody>
                @foreach($rooms as $room)
                <tr>
                    <td>
                        <input class="checkRooms" type="checkbox" name="chk_rooms[{{$room->id}}]">
                    </td>
                    <td>
                        {{$room->name}}
                    </td>
                    <td>
                        {{$room->RoomsTypes->name}}
                    </td>
                </tr>
                @endforeach
            </thbody>
        </table>


        {!! Form::dateCustom('from', 'Desde')!!}
        {!! Form::dateCustom('to', 'Hasta')!!}

        {!! Form::selectCustom('currency_id','Moneda',$currency) !!}
        {!! Form::textCustom('price','Precio')!!}



        <hr>

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

    @endsection

@stop