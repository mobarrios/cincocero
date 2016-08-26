@extends('index')

    @section('content')
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel panel-body">
                    <div class="col-xs-6 text-center ">
                        @if(Auth::user()->images->count() != 0)
                            <img src="{!! Auth::user()->images->first()->image !!}" alt="Image" class="img-thumbnail img-circle img-responsive thumb96">
                        @else
                            <em class="fa fa-user fa-5x"></em>
                        @endif
                       <hr>
                        <a class="btn btn-xs btn-block btn-default" href="{{route('userProfileEdit')}}"><i class="icon-note"></i></a>

                    </div>
                    <div class="col-xs-6">
                        <h3 class="mt0">{{Auth::user()->name}} {{Auth::user()->last_name}}</h3>
                        <p class="text-muted">Grupo : {{Auth::user()->Perfil->profile}}</p>
                        <p class="text-muted">{{Auth::user()->email}}</p>
                        <p class="text-muted">Ultima Conexión : <strong>hace 2 dias</strong></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                    <div class="panel panel-body">
                        Total de Visitas al ECommerce


                        <canvas id="myChart"  data-dia={!!$dia!!} data-cant={!!$cant!!} width="400" height="400"></canvas>


                    </div>
            </div>
        </div>



        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel panel-body">

                    @include('controls.chat')
                </div>

            </div>

        </div>


    @endsection

@section('js')
<script>
    var x   = JSON.parse($('#myChart').attr('data-dia'));
    var y   = JSON.parse($('#myChart').attr('data-cant'));
    var ctx = $("#myChart");

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: x ,
            datasets: [{
                label: 'Visitas Diarias',
                data: y,

                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

</script>
@endsection

@stop