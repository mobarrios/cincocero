{!! Form::open(['url'=>'tp','method'=>'get'])!!}

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>APELLIDO</label>
                <input class="form-control" name="last_name" placeholder="APELLIDO" type="text" required="required">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>NOMBRE</label>
                <input class="form-control" name="name" placeholder="NOMBRE" type="text" required="required">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>PROVINCIA</label>

                <select class="form-control" name="state" required="required">
                    <option>Seleccionar</option>
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
                <label>CIUDAD</label>
                <input class="form-control" name="city" placeholder="CIUDAD" type="text" required="required">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>DIRECCIÓN</label>
                <input class="form-control" name="street" placeholder="DIRECCIÓN" type="text" required="required">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>CP</label>
                <input class="form-control" name="postal_code" placeholder="CP" type="text" required="required">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>E-MAIL</label>
                <input class="form-control" name="mail" placeholder="E-MAIL" type="text" required="required">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>TEL.</label>
                <input class="form-control" name="phone" placeholder="TEL." type="text" required="required">
            </div>
        </div>

    </div>

    <hr>

    <div class="row">
        <div class="col-xs-6">

            <select name="price" class="form-control" required="required">
                <option> Importe a Abonar</option>
                <option value="{!! $publication->price !!}"> Total  :  $ {!! $publication->price !!}</option>
                <option value="{!! round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) !!}"> Seña  :  $ {!! round((intval($publication->price)  * 5  / 100),0,PHP_ROUND_HALF_UP) !!}</option>

            </select>
        </div>
        <div class="col-xs-6">
            <label></label>

            <button class="btn btn-primary" type="submit">Pagar</button>
        </div>
    </div>


</form>


