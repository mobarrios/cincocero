@extends('index')

    @section('content')
        <div class="panel">

        <div class="panel-body">

            <div class="panel-body">
                <div role="tabpanel">
                    <!-- Nav tabs-->
                    <ul role="tablist" class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">Financiera</a>
                        </li>
                        <li role="presentation" class=""><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">Financiamientos</a>
                        </li>

                    </ul>
                    <!-- Tab panes-->
                    <div class="tab-content">
                        <div id="home" role="tabpanel" class="tab-pane active">
                            @if(isset($model))
                                {!! Form::model($model, ['route'=>[$routePostEdit,$model->id], 'files' =>'true'] )!!}
                            @else
                                {!! Form::open(['route' => $routePostNew , 'files'=>'true']) !!}
                            @endif

                            {!! Form::textCustom('name', 'Nombre')!!}

                            {!! Form::textCustom('extra_cost', 'Gastos')!!}

                            {!! Form::submit(trans('messages.btnSave'),['class'=>'btn'])!!}
                            {!! Form::close()!!}
                        </div>
                        <div id="profile" role="tabpanel" class="tab-pane">
                            @include('motonet.financings.form')
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="panel-footer">



        </div>

        </div>

    @endsection

@stop