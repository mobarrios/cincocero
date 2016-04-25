@extends('index')

    @section('content')

        <div class="panel ">
            <div class=" panel-heading">
                <h4>{{$publicacion->title}}</h4>
            </div>

            <div class=" panel-body">

                <div role="tabpanel">
                    <!-- Nav tabs-->
                    <ul role="tablist" class="nav nav-tabs">
                        <li role="presentation" class="active"><a aria-expanded="true" href="#home" aria-controls="home" role="tab" data-toggle="tab">Datos Publicación</a>
                        </li>
                        <li class="" role="presentation"><a aria-expanded="false" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Preguntas <span class="label label-success ">0</span></a>
                        </li>
                    </ul>
                    <!-- Tab panes-->
                    <div class="tab-content">
                        <div id="home" role="tabpanel" class="tab-pane active">
                            @include('motonet.publications.mercadolibre_data')
                        </div>
                        <div id="profile" role="tabpanel" class="tab-pane">

                        </div>
                    </div>
                </div>


            </div>
        </div>



    @endsection

@stop

