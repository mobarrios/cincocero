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
                            <h2>PRÓXIMA FECHA</h2>
                        </div>
                    </div>
                  {{--<p><img src="assets/web/images/prox_fecha.png" width="600" height="70" alt=""/></p>--}}
                  <p>&nbsp;</p>
                </div>
                <table border="1" bordercolor="#dddddd" class="table table-hover table-striped">
                  <tbody>
                    <tr>
                      <td colspan="2" align="center" class="success">Fecha N° 6 - 05/12/2015</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success"></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">&nbsp;</td>
                      <td colspan="2" align="center" class="success">Equipo</td>
                      <td colspan="2" align="center" class="success">Hora</td>
                      <td colspan="2" align="center" class="success">Sede</td>
                      <td colspan="2" align="center" class="success">Campo</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">La Cantera</td>
                      <td colspan="2" align="center">vs</td>
                      <td colspan="2" align="center">Cabo Verde</td>
                      <td colspan="2" align="center">11:00</td>
                      <td colspan="2" align="center">La Guapeada</td>
                      <td colspan="2" align="center">2</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Clandestino</td>
                      <td colspan="2" align="center" class="active">vs</td>
                      <td colspan="2" align="center" class="active">Colo Colo</td>
                      <td colspan="2" align="center" class="active">11:30</td>
                      <td colspan="2" align="center" class="active">FOETRA</td>
                      <td colspan="2" align="center" class="active">1</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">Stoke City</td>
                      <td colspan="2" align="center">vs</td>
                      <td colspan="2" align="center">Arlekin FC</td>
                      <td colspan="2" align="center">12:00</td>
                      <td colspan="2" align="center"><span class="active">FOETRA</span></td>
                      <td colspan="2" align="center">6</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" class="active">Derby</td>
                      <td colspan="2" align="center" class="active">vs</td>
                      <td colspan="2" align="center" class="active">Drognitz</td>
                      <td colspan="2" align="center" class="active">15:00</td>
                      <td colspan="2" align="center" class="active">FOETRA</td>
                      <td colspan="2" align="center" class="active">1</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">El Tano</td>
                      <td colspan="2" align="center">vs</td>
                      <td colspan="2" align="center">La Amistad</td>
                      <td colspan="2" align="center">15:00</td>
                      <td colspan="2" align="center">AEFIP</td>
                      <td colspan="2" align="center">1</td>
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