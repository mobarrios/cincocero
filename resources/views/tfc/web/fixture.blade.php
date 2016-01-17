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

                  <p><table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                    <tbody>
                    <tr>
                      <td colspan="2" align="center" class="success">Fecha 06/09/2015</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">1</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Fecha 13/09/2015</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">2</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">La Cantera</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">Cabo Verde</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">La Cantera</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">Arlekin FC</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Clandestino</td>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">Colo Colo</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="active">La Amistad</td>
                      <td colspan="2" align="center" class="active">2</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">Drognitz</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">Stoke City</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">4</td>
                      <td colspan="2" align="center">Arlekin FC</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Stoke City</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">Clandestino</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Derby</td>
                      <td colspan="2" align="center" class="active">2</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">Drognitz</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="active">El Tano</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">Cabo Verde</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">El Tano</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">4</td>
                      <td colspan="2" align="center">La Amistad</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Colo Colo</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">4</td>
                      <td colspan="2" align="center">Derby</td>
                    </tr>
                    </tbody>
                  </table>
                  <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                    <tbody>
                    <tr>
                      <td colspan="2" align="center" class="success">Fecha 20/09/2015</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">3</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Fecha 27/09/2015</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">4</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">Clandestino</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">6</td>
                      <td colspan="2" align="center">La Cantera</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Stoke City</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">La Amistad</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Cabo Verde</td>
                      <td colspan="2" align="center" class="active">2</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">Drognitz</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="active">La Cantera</td>
                      <td colspan="2" align="center" class="active">5</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">El Tano</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">La Amistad</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Derby</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Colo Colo</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Drognitz</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Stoke City</td>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">El Tano</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="active">Arlekin FC</td>
                      <td colspan="2" align="center" class="active">2</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">Clandestino</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">Colo Colo</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Arlekin FC</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Cabo Verde</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">Derby</td>
                    </tr>
                    </tbody>
                  </table>
                  <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                    <tbody>
                    <tr>
                      <td colspan="2" align="center" class="success">Fecha 04/10/2015</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">5</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Fecha 01/11/2015</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">6</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">Clandestino</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">6</td>
                      <td colspan="2" align="center">La Cantera</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Stoke City</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">La Amistad</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Cabo Verde</td>
                      <td colspan="2" align="center" class="active">2</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">Drognitz</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="active">La Cantera</td>
                      <td colspan="2" align="center" class="active">5</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">El Tano</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">La Amistad</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Derby</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Colo Colo</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Drognitz</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Stoke City</td>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">El Tano</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="active">Arlekin FC</td>
                      <td colspan="2" align="center" class="active">2</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">Clandestino</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">Colo Colo</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Arlekin FC</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Cabo Verde</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">Derby</td>
                    </tr>
                    </tbody>
                  </table>
                  <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                    <tbody>
                    <tr>
                      <td colspan="2" align="center" class="success">Fecha 08/11/2015</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">7</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Fecha 08/11/2015</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">8</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">Clandestino</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">6</td>
                      <td colspan="2" align="center">La Cantera</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Stoke City</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">La Amistad</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Cabo Verde</td>
                      <td colspan="2" align="center" class="active">2</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">Drognitz</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="active">La Cantera</td>
                      <td colspan="2" align="center" class="active">5</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">El Tano</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">La Amistad</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Derby</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Colo Colo</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Drognitz</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Stoke City</td>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">El Tano</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="active">Arlekin FC</td>
                      <td colspan="2" align="center" class="active">2</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">Clandestino</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">Colo Colo</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Arlekin FC</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Cabo Verde</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">Derby</td>
                    </tr>
                    </tbody>
                  </table>
                  <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                    <tbody>
                    <tr>
                      <td colspan="2" align="center" class="success">Fecha 22/11/2015</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">9</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Fecha 29/11/2015</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">10</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">Clandestino</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">6</td>
                      <td colspan="2" align="center">La Cantera</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Stoke City</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">La Amistad</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Cabo Verde</td>
                      <td colspan="2" align="center" class="active">2</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">Drognitz</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="active">La Cantera</td>
                      <td colspan="2" align="center" class="active">5</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">El Tano</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">La Amistad</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Derby</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Colo Colo</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Drognitz</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Stoke City</td>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">El Tano</td>
                      <td colspan="2" align="center" class="active">&nbsp;</td>
                      <td colspan="2" align="center" class="active">Arlekin FC</td>
                      <td colspan="2" align="center" class="active">2</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">Clandestino</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">Colo Colo</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Arlekin FC</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td colspan="2" align="center">Cabo Verde</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">Derby</td>
                    </tr>
                    </tbody>
                  </table></p>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <center><!-- row --></center>
                <!-- row --><!-- row --><!-- row -->

                <div class="row"></div>
                <!-- row --><!-- row --><!-- row --><!-- row --><!-- row --><!-- row -->

            </div>
            <!-- elements-box -->

        </div>
        <!-- center-col -->
      @include('tfc/web/sidebar/sidebar')
    @endsection