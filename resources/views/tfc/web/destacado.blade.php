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
                            <h2>JUGADOR DE LA FECHA</h2>
                        </div>
                    </div>
                  {{--<p><img src="assets/web/images/jug.png" width="600" height="70" alt=""/></p>--}}
                  <p>&nbsp;</p>
                </div>
                <table width="100%" border="0">
                  <tbody>
                    <tr>
                      <td width="18%"><img src="assets/web/images/fabian.jpg" width="180" height="195" alt=""/></td>
                      <td width="8%">&nbsp;</td>
                      <td width="74%"><table width="100%">
                        <tbody>
                          <tr>
                            <td><h6 class="entry-title">Fabián Héctor Morales </h6>
                              <p>                              
                              <h6 class="entry-title">Categoría:
                                </p>
                              </h6></td>
                          </tr>
                          <tr>
                            <td>Bundesliga A</td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td height="9"><h6 class="entry-title">Observaciones:</h6></td>
                          </tr>
                          <tr>
                            <td>Tremenda actuación de  Fabián Morales  que con su golazo de cabeza  y la pegada exquisita de su pié derecho resultó fundamental&nbsp;3</td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                        </tbody>
                      </table></td>
                    </tr>
                  </tbody>
                </table>
                <p>&nbsp;</p>

                <div class="categoria-container titulo-categoria" style="border-bottom-color: {{$colorBottom}};border-top-color: {{$colorBottom}};border-left-color: {{$colorBottom}}">
                    <div class="color-top" style="background-color: {{$colorTop}};"></div>
                    <div class="color-bottom" style="background-color: {{$colorBottom}};">
                        <h2>EL EQUIPO DE LA FECHA</h2>
                    </div>
                </div>
                {{--<p><img src="assets/web/images/equipo_fecha.png" width="600" height="70" alt=""/></p>--}}
                <table width="100%" border="0">
                  <tbody>
                    <tr>
                      <td width="18%"><img src="assets/web/images/equipo1.jpg" width="450" height="302" alt=""/></td>
                    </tr>
                  </tbody>
                </table>
                <p>                
                <h6 class="entry-title">Equipo:</h6>
Fergashion
</p>
<p>
<h6 class="entry-title">Categoria:</h6>
Bundesliga A
</p>
<p>
<h6 class="entry-title">Nota:</h6>
</p>
<p>Tenía que ganar y ganó ante un difícil rival como  Cover que le venía pisando los talones. No dejó dudas, ganó, gustó y  goleó.</p>
<p>&nbsp;</p>

                <div class="categoria-container titulo-categoria" style="border-bottom-color: {{$colorBottom}};border-top-color: {{$colorBottom}};border-left-color: {{$colorBottom}}">
                    <div class="color-top" style="background-color: {{$colorTop}};"></div>
                    <div class="color-bottom" style="background-color: {{$colorBottom}};">
                        <h2>EL PARTIDO DE LA FECHA</h2>
                    </div>
                </div>
                {{--<p><img src="assets/web/images/partido_fecha.png" width="600" height="70" alt=""/></p>--}}
<h6 class="entry-title">Sara Goza SF vs Cavalino FC.</h6>
<p>&nbsp;</p>
<p> Todos esperaban este partido y no defraudaron. </p>
<p>Se mataron a goles. Un  ida y vuelta para el infarto. Cavalino FC sumó 3 puntos importantes y se afianza en el objetivo de salir  campeón. Jugando así va a ser difícil, bajarlo</p>
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