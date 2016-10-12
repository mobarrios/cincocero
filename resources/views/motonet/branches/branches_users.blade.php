@extends('index')

    @section('content')
        <div class="panel">
            {!! Form::open(['route'=>'branches_users'])!!}


            {!! Form::selectCustom('profiles_id','Seleccione Usuario',$users) !!}
            {!! Form::selectCustom('users_id','Seleccione Perfil',$users) !!}

            {!! Form::close() !!}
        <div class="panel-body">
            <table class="table">
                <thead>
                <th>#</th>
                <th>DNI</th>
                <th>Usuario</th>
                <th>Perfil</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="panel-footer">

        {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
        {!! Form::close()!!}

        </div>

        </div>

    @endsection

@stop