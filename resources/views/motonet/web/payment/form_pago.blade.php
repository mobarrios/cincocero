
    <div class="row">
        <div class="col-xs-12 col-md-2">
            <div class="form-group">
                {!! Form::text('dni',null,['class'=>'input-sm form-control','placeholder'=>'DNI', 'required'=>'required']) !!}
            </div>
        </div>
        <div class="col-xs-6 col-md-5">
            <div class="form-group">
                {!! Form::text('last_name',null,['class'=>'input-sm form-control','placeholder'=>'Apellido', 'required'=>'required']) !!}
            </div>
        </div>
        <div class="col-xs-6 col-md-5">
            <div class="form-group">
                {!! Form::text('name',null,['class'=>'input-sm form-control','placeholder'=>'Nombre', 'required'=>'required']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-md-3">
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

        <div class="col-xs-6 col-md-3">
            <div class="form-group">
                {!! Form::text('city',null,['class'=>'input-sm form-control','placeholder'=>'Ciudad', 'required'=>'required']) !!}
            </div>
        </div>


        <div class="col-xs-12 col-md-3">
            <div class="form-group">
                {!! Form::text('street',null,['class'=>'input-sm form-control','placeholder'=>'Calle, Nro', 'required'=>'required']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
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

        <button  type="submit" class="btn btn-block">Comprar</button>
    </div>


{!! Form::close() !!}


