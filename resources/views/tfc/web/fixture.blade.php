@extends('tfc/web/template')
    @section('content')
      @include('tfc/web/leftbar/leftbar')
        <div class="center-col">
            
            <!-- breadcrumb -->

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->

                <div class="categoria-container titulo-categoria" style="border-bottom-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif; border-top-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif ;border-left-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif">
                    <div class="color-top" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_top}}@else{{'#0f5128'}}@endif;"></div>
                    <div class="color-bottom" style="background-color: @if(\Illuminate\Support\Facades\Session::has('categoria')){{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}@else{{'#95b114'}}@endif;">
                      <h2>FIXTURE</h2>
                    </div>
                </div>

                  <p>
                    <div class="table-responsive">
                    @foreach($fases as $fase)


                        <div class="col-xs-6">
                            <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                                <tr>
                                    <td colspan="2" align="center" class="success">Fecha </td>
                                    <td colspan="2" align="center" class="success">&nbsp;</td>
                                    <td colspan="2" align="center" class="success">&nbsp;</td>
                                    <td colspan="2" align="center" class="success">{{$fase->name}}</td>

                                </tr>
                                @foreach($fase->Matches as $match)
                                <tr>
                                    <td colspan="2" align="center">{{$match->HomeTeam->name or 'Libre'}}</td>
                                    <td colspan="2" align="center">{{$match->home_goals}}</td>
                                    <td colspan="2" align="center">{{$match->away_goals}}</td>
                                    <td colspan="2" align="center">{{$match->AwayTeam->name or 'Libre'}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    @endforeach
                    </div>

                    <!-- row --><!-- row --><!-- row -->

            </div>
            <!-- elements-box -->

        </div>
    </div>
        <!-- center-col -->
      @include('tfc/web/sidebar/sidebar')
    @endsection