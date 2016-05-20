{!! Form::open(['url'=>'pay','method'=>'get'])!!}

    <div class="row">
        <div class="col-xs-2">
            <div class="form-group">
                {!! Form::text('dni',null,['class'=>'input-sm form-control','placeholder'=>'DNI', 'required'=>'required']) !!}
            </div>
        </div>
        <div class="col-xs-5">
            <div class="form-group">
                {!! Form::text('last_name',null,['class'=>'input-sm form-control','placeholder'=>'Apellido', 'required'=>'required']) !!}
            </div>
        </div>
        <div class="col-xs-5">
            <div class="form-group">
                {!! Form::text('name',null,['class'=>'input-sm form-control','placeholder'=>'Nombre', 'required'=>'required']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <select class=" form-control" name="state" required="required">
                    <option value="">Seleccionar Provincia</option>
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

        <div class="col-xs-3">
            <div class="form-group">
                {!! Form::text('city',null,['class'=>'input-sm form-control','placeholder'=>'Ciudad', 'required'=>'required']) !!}
            </div>
        </div>


        <div class="col-xs-3">
            <div class="form-group">
                {!! Form::text('street',null,['class'=>'input-sm form-control','placeholder'=>'Calle, Nro', 'required'=>'required']) !!}
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                {!! Form::text('postal_code',null,['class'=>'input-sm form-control','placeholder'=>'Codigo Postal', 'required'=>'required']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                {!! Form::text('email',null,['type'=>'email','class'=>'input-sm form-control','placeholder'=>'E-Mail', 'required'=>'required']) !!}
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                {!! Form::text('phone',null,['class'=>'input-sm form-control','placeholder'=>'Tel./Cel.', 'required'=>'required']) !!}
            </div>
        </div>

    </div>
<hr>
    <div class="row">
        <div class="col-xs-12">
            <select name="price" class="input-sm form-control" required="required">
                <option value="" ><i class="small">Seleccionar Importe a Abonar</i></option>
                <option value="{!! $publication->price !!}"> Total  :  $ {!! $publication->price !!}</option>
                <option value="{!! round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) !!}"> Seña  :  $ {!! round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) !!}</option>
            </select>
        </div>
        <hr>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <label>
                        <input name="pago"  value="tp" type="radio" required="required">
                        <strong>Todo Pago</strong>
                    </label>
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
                    <label>
                        <input name="pago" value="mp" type="radio" required="required">
                        <strong>Mercado Pago</strong>
                    </label>
                    <i class="icon icon-mp text-success fs15"></i>
                    <hr>
                    <p class="small">
                        Formulario para pagar desde la web de Mercado Pago.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <label>
                        <input name="pago" value="deposito" type="radio" required="required">
                        <strong>Depósito Bancario</strong>
                    </label>
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


