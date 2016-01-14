@extends('tfc/web/template')
    @section('content')
      @include('tfc/web/leftbar/leftbar')

        <div class="center-col">

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                  <div class="categoria-container titulo-categoria" style="border-bottom-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};border-top-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};border-left-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}">
                    <div class="color-top" style="background-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_top}};"></div>
                    <div class="color-bottom" style="background-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};">
                      <h2>TABLA DE POSICIONES</h2>
                    </div>
                  </div>
                  {{--<p><img src="assets/web/images/tabla_pos.png" width="600" height="70" alt=""/></p>--}}
                  <p>&nbsp;</p>
                </div>
              <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                  <tbody>
                    <tr>
                      <td colspan="2" align="center" class="info">Escudo</td>
                      <td colspan="2" align="center" class="info">Equipo</td>
                      <td colspan="2" align="center" class="info">Pts.</td>
                      <td colspan="2" align="center" class="info">PJ</td>
                      <td colspan="2" align="center" class="info">PG</td>
                      <td colspan="2" align="center" class="info">PE</td>
                      <td colspan="2" align="center" class="info">PP</td>
                      <td colspan="2" align="center" class="info">GF</td>
                      <td colspan="2" align="center" class="info">GC</td>
                      <td colspan="2" align="center" class="info">DIF</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active"><img src="escudos/01.png" width="35" height="35" alt=""/></td>
                      <td colspan="2" align="center" class="active"><a href="{{asset("web/la_cantera")}}">La Cantera</a></td>
                      <td colspan="2" align="center" class="active">13</td>
                      <td colspan="2" align="center" class="active">5</td>
                      <td colspan="2" align="center" class="active">4</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">19</td>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">16</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active"><img src="escudos/02.png" width="35" height="35" alt=""/></td>
                      <td colspan="2" align="center">Derby</td>
                      <td colspan="2" align="center">13</td>
                      <td colspan="2" align="center">5</td>
                      <td colspan="2" align="center">4</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">19</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">16</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active"><img src="escudos/03.png" width="35" height="35" alt=""/></td>
                      <td colspan="2" align="center" class="active">Stoke City</td>
                      <td colspan="2" align="center" class="active">13</td>
                      <td colspan="2" align="center" class="active">5</td>
                      <td colspan="2" align="center" class="active">4</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">19</td>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">16</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active"><img src="escudos/04.png" width="35" height="35" alt=""/></td>
                      <td colspan="2" align="center">Arlekin FC</td>
                      <td colspan="2" align="center">13</td>
                      <td colspan="2" align="center">5</td>
                      <td colspan="2" align="center">4</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">19</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">16</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active"><img src="escudos/05.png" width="35" height="35" alt=""/></td>
                      <td colspan="2" align="center" class="active">La Amistad</td>
                      <td colspan="2" align="center" class="active">13</td>
                      <td colspan="2" align="center" class="active">5</td>
                      <td colspan="2" align="center" class="active">4</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">19</td>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">16</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active"><img src="escudos/06.png" width="35" height="35" alt=""/></td>
                      <td colspan="2" align="center">Cabo Verde</td>
                      <td colspan="2" align="center">13</td>
                      <td colspan="2" align="center">5</td>
                      <td colspan="2" align="center">4</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">19</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">16</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active"><img src="escudos/07.png" width="35" height="35" alt=""/></td>
                      <td colspan="2" align="center" class="active">El Tano</td>
                      <td colspan="2" align="center" class="active">13</td>
                      <td colspan="2" align="center" class="active">5</td>
                      <td colspan="2" align="center" class="active">4</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">19</td>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">16</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active"><img src="escudos/08.png" width="35" height="35" alt=""/></td>
                      <td colspan="2" align="center">Clandestino</td>
                      <td colspan="2" align="center">13</td>
                      <td colspan="2" align="center">5</td>
                      <td colspan="2" align="center">4</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">19</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">16</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active"><img src="escudos/09.png" width="35" height="35" alt=""/></td>
                      <td colspan="2" align="center" class="active">Drognitz</td>
                      <td colspan="2" align="center" class="active">13</td>
                      <td colspan="2" align="center" class="active">5</td>
                      <td colspan="2" align="center" class="active">4</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">19</td>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">16</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active"><img src="escudos/10.png" width="35" height="35" alt=""/></td>
                      <td colspan="2" align="center">Colo Colo</td>
                      <td colspan="2" align="center">13</td>
                      <td colspan="2" align="center">5</td>
                      <td colspan="2" align="center">4</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">19</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">16</td>
                    </tr>
                  </tbody>
                </table>
              <div class="categoria-container titulo-categoria" style="border-bottom-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};border-top-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};border-left-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}}">
                <div class="color-top" style="background-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_top}};"></div>
                <div class="color-bottom" style="background-color: {{\Illuminate\Support\Facades\Session::get('categoria')->color_bottom}};">
                  <h2>RESULTADO DE LA FECHA</h2>
                </div>
              </div>
              {{--<p><img src="assets/web/images/resultados_fecha.png" width="600" height="70" alt=""/></p>--}}
                <p>&nbsp;</p>
                <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                  <tbody>
                  <tr>
                      <td colspan="6" align="center" class="success">Fecha 6 - 05/12/2015</td>
                    </tr>
                    <tr>
                      <td align="center" class="success">Equipo</td>
                      <td align="center" class="success"></td>
                      <td align="center" class="success"></td>
                      <td align="center" class="success">Equipo</td>
                    </tr>
                    <tr>
                      <td align="center" class="active">Arlekin FC</td>
                      <td align="center" class="active">0</td>
                      <td align="center" class="active">3</td>
                      <td align="center" class="active">El Tano</td>
                    </tr>
                    <tr>
                      <td align="center">La Cantera</td>
                      <td align="center">6</td>
                      <td align="center">2</td>
                      <td align="center">Colo Colo</td>
                    </tr>
                    <tr>
                      <td align="center" class="active">Drognitz</td>
                      <td align="center" class="active">0</td>
                      <td align="center" class="active">11</td>
                      <td align="center" class="active">Stoke City</td>
                    </tr>
                    <tr>
                      <td align="center">Derby</td>
                      <td align="center">2</td>
                      <td align="center">0</td>
                      <td align="center">Clandestino</td>
                    </tr>
                    <tr>
                      <td align="center" class="active">La Amistad</td>
                      <td align="center" class="active">1</td>
                      <td align="center" class="active">1</td>
                      <td align="center" class="active">Cabo Verde</td>
                    </tr>
                  </tbody>
                </table>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <center><!-- row --></center>
                <!-- row --><!-- row --><!-- row -->

                <div class="row"></div>
                <!-- row --><!-- row --><!-- row --><!-- row --><!-- row --><!-- row -->

            </div>
            <!-- elements-box -->

        </div>

      {{--@include('tfc/web/sidebar/sidebar)--}}
      @include('tfc/web/sidebar/sidebar')
    @endsection