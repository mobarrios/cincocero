<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compra</title>
    <style>
        *{
            font-family: Arial;
            font-weight: lighter !important;
        }
        body{
            padding:15px;
            width:100%;

        }

        #header{
            width: 100%;
            margin-top: 15px;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }

        #header img{
            width: 150px;
        }

        #container h1{
            color: #04719C;
            font-size: 120%;
            margin-bottom: 20px;
        }

        #container h1 *{
            display: inline-block;
            vertical-align: middle;
            font-weight: lighter;
        }

        #container h1 span{
            margin-right: 5px;
        }

        #producto div{
            display: inline-block;
            vertical-align: top;
        }

        #producto div img{
            border: 1px solid #ddd;
        }

        #producto div h2{
            margin:0;
            padding: 0;
        }

        #producto div h3{
            color: #cc3c46;
        }

        #producto div h3 *{
            display: inline-block;
        }

        .black{
            color: black !important;
        }

        #descripProd{
            margin-left: 25px;
        }

        #descripProd *{
            margin:0;
            padding: 0;
        }

        #descripProd h2{
            font-size: 18px;
            color: #04719C;
        }

        #descripProd p,{
            margin-top: 10px;
            font-size: 12px;
            color: #999999;
        }

        #descripProd h3{
            margin-top: 10px;
            font-size: 15px;
        }

        #descripProd h3 span{
            font-size: 13px;
            color: #999999;
        }

        #pago{
            margin-top:25px;
        }

        #pago h3,#medioPago h3{
            font-size: 15px;
            font-style: normal;
            color: #7b7b7b;
            line-height: 30px;
            display:inline;
        }

        #pago h3:nth-child(2){
            border-bottom: 1px solid #bcbcbc;
            padding-bottom: 5px;
        }

        #pago h3 span{
            margin-left: 50px;
        }

        #pago{
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
        }

        #medioPago p{
            font-size: 12px;
            color: #7b7b7b;
        }

        #medioPago p span{
            color: #bcbcbc;
        }

    </style>
</head>
<body>
    <div id="header">
        <img src="http://www.motonet.com.ar/testing/mail/logo.png" alt="">
    </div>

    <div id="container">
        <h1>
            <span>
                <img src="http://www.motonet.com.ar/testing/mail/ok.png" alt="ok">
            </span>
            ¡Gracias por tu compra!
        </h1>

        <div id="producto">
            <div>
                <img src="http://www.motonet.com.ar/testing/{{$image}}" alt="nombreProducto" width="150">
            </div>
            <div id="descripProd">
                <h2>{{$publication_name}}</h2>
                <p>N° orden: {{$operation_id}}</p>
                <p>Medio de pago: {{$total}}</p>
                <h3>$ {{$publication_price}}</h3>
            </div>
        </div>

        <div id="pago">
            <h1>A pagar</h1>

            <h3>Pagado: $ {{$total}}</h3> <br>
            <span></span>
            <h3>A pagar:<span style="color:#cc3c46;">$ {{$publication_price - $total}}</span></h3>
        </div>

        <div id="medioPago">
            <h1>Medio de pago</h1>
            <h3>Deposito bancario</h3>

            <p>Banco: <span>541213</span></p>
            <p>N° de cuenta: <span>541213</span></p>
            <p>CBU: <span>541213</span></p>
        </div>
    </div>

</body>
</html>