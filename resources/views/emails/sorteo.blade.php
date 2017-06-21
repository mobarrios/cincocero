<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sorteo!!</title>
</head>
<body>

    <div id="container">
        <div id="pago">
            <table>
                <tr><td><h1>San Miguel Maneja Seguro</h1></td></tr>
                <tr><td><h3>El sorteo se realizará el 16 de Julio a las 17.00hs en la intersección de Av. Pte. Perón y Belgrano, San Miguel.</h3></td></tr>
                <tr><td> DNI : <strong>{{$dni or ''}}</strong> <br>
                         NOMBRE : <strong>{{ $name or ''}}</strong><br>
                         APELLIDO : <strong>{{ $last_name or ''}}</strong></td></tr>
                <tr>
                    <td><h3>Gracias por inscribirse a nuestro Sorteo!.</h3> <br> Por favor clickee <a href="http://www.motonet.com.ar/confirm/{{$id}}">AQUI!</a> en la confirmación de tu correo.</td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>