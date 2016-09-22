@extends('index')

@section('content')

    <div class="row">
    <div class="col-md-3">
        <div class="panel b">
            <div class="panel-heading bg-gray-lighter text-bold">Perfil del Cliente</div>

            <div class="list-group">
                <a href="#tabSetting1" data-toggle="tab" class="list-group-item">Datos Personales</a>
                <a href="#tabSetting2" data-toggle="tab" class="list-group-item">Historial</a>
            </div>
        </div>

        <div class="panel b">

            <div class="list-group">
                <span href="" class="list-group-item">
                    <a href="#tabSetting3" data-toggle="tab" class="btn btn-primary btn-block">Nuevo Presupuesto </a>
                </span>
                <span href="" class="list-group-item">
                    <a href="#tabSetting4" data-toggle="tab" class="btn btn-warning btn-block">Nueva Derivación </a>
                </span>

            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="tab-content p0 b0">
             <div id="tabSetting1" class="tab-pane active">
                <div class="panel b">
                    <div class="panel-heading bg-gray-lighter text-bold">Datos Personales</div>
                    <div class="panel-body">
                       @include('motonet.clients.form_build')
                    </div>
                </div>
            </div>

            <div id="tabSetting2" class="tab-pane">
                <div class="panel b">
                    <div class="panel-heading bg-gray-lighter text-bold">Historial</div>
                    <div class="panel-body">
                        @include('motonet.clients.history')
                    </div>
                </div>
            </div>

            <div id="tabSetting3" class="tab-pane">
                <div class="panel b">
                    <div class="panel-heading bg-gray-lighter text-bold">Nuevo Presupuesto</div>
                    <div class="panel-body">
                        @include('motonet.budgets.form')
                    </div>
                </div>
            </div>

            <div id="tabSetting4" class="tab-pane">
                <div class="panel b">
                    <div class="panel-heading bg-gray-lighter text-bold">Nueva Derivación</div>
                    <div class="panel-body">
                        DERIVACION
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection