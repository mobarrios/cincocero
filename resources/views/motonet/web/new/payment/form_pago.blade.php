
    <div class="row">
        <div class="col-xs-12 col-md-2">
            <div class="form-group">
                {!! Form::text('dni',null,['class'=>'input-sm input-num form-control','placeholder'=>'DNI', 'required'=>'required']) !!}
            </div>
        </div>
        <div class="col-xs-6 col-md-5">
            <div class="form-group">
                {!! Form::text('last_name',null,['class'=>'input-sm input-string form-control','placeholder'=>'Apellido', 'required'=>'required']) !!}
            </div>
        </div>
        <div class="col-xs-6 col-md-5">
            <div class="form-group">
                {!! Form::text('name',null,['class'=>'input-sm form-control input-string','placeholder'=>'Nombre', 'required'=>'required']) !!}
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
    <div class="col-xs-12 center-block text-center">
        <label>
            <input name="terms" type="checkbox" required="required"> Acepto <a href="" data-toggle="modal" data-target="#myModal">términos y condiciones</a>
        </label>
    </div>
<hr>
    <div class="row">

        <button id="FinalizaCompra" type="submit" class="btn btn-block">Comprar</button>
    </div>

{!! Form::hidden('publication_id',$publication->id) !!}
{!! Form::close() !!}


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog"  role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Términos y condiciones</h4>
                </div>
                <div class="modal-body">
                    <p>Los valores de los modelos publicados se expresan en efectivo y en pesos argentinos.
                        <br>
                    Los valores de los modelos publicados no incluyen en el valor el costo del patentamiento, el valor del seguro o algún otro tipo de gasto adicional al producto.
                        <br>
                    Para la financiación del producto, el precio que se utilizará será el precio de lista.
                        <br>
                    Motonet recomienda especialmente guardar una copia impresa de las Condiciones de Uso Al ingresar en el Sitio, el Usuario declara saber, conocer y aceptar las presentes Condiciones de Uso. Las Condiciones de Uso, así como sus modificaciones, estarán vigentes en forma inmediata a su publicación en el Sitio. La utilización del Sitio implica el conocimiento y la aceptación plena por parte del Usuario de las Condiciones de Uso. En caso de no aceptar en las Condiciones de Uso o cualquier cambio o modificación de las mismas no deberá continuar utilizando el Sitio. El Sitio ha sido programado para que constituya un medio virtual para el acceso de los Usuarios a los productos de Motonet del área de su domicilio. Usuarios que pueden utilizar los Servicios del Sitio. Los Servicios sólo están disponibles para personas que tengan capacidad legal para contratar. No podrán utilizar los Servicios las personas que no tengan esa capacidad, los menores de edad o quien registre como Usuario una persona jurídica, deberá tener capacidad para contratar a nombre de tal entidad y de obligar a la misma en los términos de estas Condiciones de Uso.
                        <br>
                    El Usuario declara que la información que brindará al realizar la compra de un producto será precisa, correcta y actual comprometiéndose a informar en forma inmediata y fehaciente respecto de cualquier cambio siendo a su vez enteramente responsable frente a Motonet por los daños y perjuicios que el incumplimiento de dicha obligación pudiere acarrearle incluyendo pero no limitándose a costos de ubicación física del Usuario, costos de intimaciones y citaciones, etc. 
                    </p>
                </div>
            </div>
        </div>
    </div>