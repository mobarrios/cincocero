{!! Form::open(['url'=>'pay','method'=>'get'])!!}

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">

                <input class="input-sm form-control" name="last_name" placeholder="Apellido" type="text" required="required">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">

                <input class="input-sm form-control" name="name" placeholder="Nombre" type="text" required="required">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <select class=" form-control" name="state" required="required">
                    <option>Seleccionar Provincia</option>
                    <option value="C">CABA</option>
                    <option value="B">Buenos Aires</option>
                    <option value="K">Catamarca</option>
                    <option value="H">Chaco</option>
                    <option value="U">Chubut</option>
                    <option value="X">Córdoba</option>
                    <option value="W">Corrientes</option>
                    <option value="E">Entre Ríos</option>
                    <option value="P">Formosa</option>
                    <option value="Y">Jujuy</option>
                    <option value="L">La Pampa</option>
                    <option value="F">La Rioja</option>
                    <option value="M">Mendoza</option>
                    <option value="N">Misiones</option>
                    <option value="Q">Neuquén</option>
                    <option value="R">Río Negro</option>
                    <option value="A">Salta</option>
                    <option value="J">San Juan</option>
                    <option value="D">San Luis</option>
                    <option value="Z">Santa Cruz</option>
                    <option value="S">Santa Fe</option>
                    <option value="G">Santiago del Estero</option>
                    <option value="V">Tierra del Fuego</option>
                    <option value="T">Tucumán</option>
                </select>

            </div>
        </div>

        <div class="col-xs-6">
            <div class="form-group">
                <input class="input-sm  form-control" name="city" placeholder="Ciudad" type="text" required="required">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <input class="input-sm form-control" name="street" placeholder="Calle , Nro" type="text" required="required">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <input class="input-sm form-control" name="postal_code" placeholder="Codigo Postal" type="text" required="required">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <input class="input-sm form-control" name="email" placeholder="e-mail" type="text" required="required">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <input class="input-sm form-control" name="phone" placeholder="Tel / Cel" type="text" required="required">
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12">
            <select name="price" class="input-sm form-control" required="required">
                <option value="0" ><i class="small">Seleccionar Importe a Abonar</i></option>
                <option value="{!! $publication->price !!}"> Total  :  $ {!! $publication->price !!}</option>
                <option value="{!! round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) !!}"> Seña  :  $ {!! round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) !!}</option>
            </select>
        </div>
        <hr>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <input name="pago"  value="tp" type="radio" required="required">
                    <strong>Todo Pago</strong>
                    <img class="pull-right" src="http://www.todopago.com.ar/sites/todopago.com.ar/files/kit_boton_72x30_1.jpg" alt="" />

                    <hr>
                    <p class="small">
                        Formulario para pagar desde la web de TodoPago.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <input name="pago" value="mp" type="radio" required="required">
                    <strong>Mercado Pago</strong>
                    <i class="icon icon-mp text-success"></i>
                    <hr>
                    <p class="small">
                        Boton de pago de MercadoPago.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <input name="pago" value="deposito" type="radio" required="required">
                    <strong>Depósito Bancario</strong>
                    <hr>

                    <p class="small">
                        Se enviara un mail con el numero de cuenta bancaria .
                    </p>
                </div>
            </div>
        </div>
        <button  type="submit" class="btn btn-block">Comprar</button>
    </div>


{!! Form::close() !!}


