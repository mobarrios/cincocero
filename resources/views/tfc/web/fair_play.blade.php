@extends('tfc/web/template')
  @section('content')
      {{$colorTop = "#C4CD0D"}}
      {{$colorBottom = "#005020"}}
      <div class="center-col">
            
            <div class="breadcrumb clearfix"><span class="widget-title clearfix"><img src="assets/web/images/tch.png" width="718" height="59" alt=""/></span><span class="bottom-line"></span>
            </div>
            <!-- breadcrumb -->

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                  <div class="categoria-container titulo-categoria" style="border-bottom-color: {{$colorBottom}};border-top-color: {{$colorBottom}};border-left-color: {{$colorBottom}}">
                    <div class="color-top" style="background-color: {{$colorTop}};"></div>
                    <div class="color-bottom" style="background-color: {{$colorBottom}};">
                      <h2>FAIR PLAY</h2>
                    </div>
                  </div>
                  {{--<p><img src="assets/web/images/fair_play.png" width="600" height="70" alt=""/></p>--}}
                  <p>&nbsp;</p>
                </div>
                <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                  <tbody>
                    <tr>
                      <td colspan="2" align="center" class="active">Posicion</td>
                      <td colspan="2" align="center" class="active">Equipo</td>
                      <td colspan="2" align="center" class="active"><img src="assets/web/images/roja.png" width="20" height="26" alt=""/></td>
                      <td colspan="2" align="center" class="active"><img src="assets/web/images/amarilla.png" width="20" height="26" alt=""/></td>
                      <td colspan="2" align="center" class="active">Pts</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">Drognitz</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">0</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">2</td>
                      <td colspan="2" align="center">Colo Colo</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">0</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">Clandestino</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">1</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">4</td>
                      <td colspan="2" align="center">Derby</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">3</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">5</td>
                      <td colspan="2" align="center" class="active">El Tano</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">3</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">6</td>
                      <td colspan="2" align="center">La Cantera</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">3</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">7</td>
                      <td colspan="2" align="center" class="active">Cabo Verde</td>
                      <td colspan="2" align="center" class="active">1</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">3</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">8</td>
                      <td colspan="2" align="center">Stoke City</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">1</td>
                      <td colspan="2" align="center">4</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">9</td>
                      <td colspan="2" align="center" class="active">La Amistad</td>
                      <td colspan="2" align="center" class="active">3</td>
                      <td colspan="2" align="center" class="active">0</td>
                      <td colspan="2" align="center" class="active">9</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">10</td>
                      <td colspan="2" align="center">Arlekin FC</td>
                      <td colspan="2" align="center">3</td>
                      <td colspan="2" align="center">0</td>
                      <td colspan="2" align="center">9</td>
                    </tr>
                  </tbody>
                </table>
                <p>&nbsp;</p>
                <center><!-- row --></center>
                <!-- row --><!-- row --><!-- row -->

                <div class="row"></div>
                <!-- row --><!-- row --><!-- row --><!-- row --><!-- row --><!-- row -->

            </div>
            <!-- elements-box -->

        </div>
        <!-- center-col -->
    @endsection