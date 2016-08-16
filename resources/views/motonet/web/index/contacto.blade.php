{!! Form::open(['route' => "postLogin"]) !!}

{!! Form::textCustom('name', 'Nombre')!!}
{!! Form::textCustom('phone', 'Teléfono')!!}
{!! Form::textCustom('email', 'Email')!!}
{!! Form::textAreaCustom('message', 'Mensaje')!!}

{!! Form::submit("Enviar",['class'=>'btn'])!!}

{!! Form::close() !!}