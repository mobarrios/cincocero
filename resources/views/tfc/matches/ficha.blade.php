<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Grilla TFC - Partido del Día</title>

    <!-- paste this code into your webpage -->
    <link href="assets/css/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />

    <!-- end -->

    <style>

        body{
            margin:0;
            padding:0;
            font:12px Arial, Helvetica, sans-serif !important;
            color:#555;
            line-height:100%;
            text-align:left;
            width:100%;
            height:100%;
            position: relative;
        }

        a{
            text-decoration:none;
            color:#057fac;
        }

        a:hover{
            text-decoration:none;
            color:#999;
        }

        h1{
            font-size:100%;
            margin:0 20px;
            line-height:80px;
        }

        h2{
            font-size:100%;
        }

        #container{
            margin:0 auto;
            width:60%;
            /*background:#fff;*/
            padding-bottom:10px;
        }

        #content{margin:0 20px;}

        p.sig{
            margin:0 auto;
            width:680px;
            padding:1em 0;
        }

        form{
            margin:5px 0;
            padding:.2em 20px;
            /*background:#eee;*/
        }

        .trTable>td
        {
            height: 19px !important;
            font-size: 9px;
        }

        td{
              /*font-size:7pt !important;*/
              border-color:black !important;
              background-color: white !important;
          }

        th{
            border-color:black !important;
            /*font-size:10pt !important;*/
        }

        .vc{
            width:17px !important;
        }

        .S{
            /*background-color: #b3b3b3 !important;*/
        }



        tr{
            height: 100px !important;
        }

        .clear{
            clear:both;
        }


        .arbitraje{
            width: 60%;
            float: right;
        }

        .arbitraje tr td:first-child{
            width:100px;
        }

        .tabla-bottom img,.tabla-bottom #bottom, #resultadoFinal {
            display: inline-block;
        }

        .tabla-bottom img{
            margin-left: -20px;
        }

        .tabla-bottom #bottom{
            margin-left:20px;
            margin-top: -10px;
            width:600px;
        }

        .tabla-bottom #bottom td{
            height:25px;
        }

        .tabla-bottom{
            margin-bottom: -200px;
        }

        #resultadoFinal{
            margin-top:-100px !important;
            margin-left:-200px;
        }

        #resultadoFinal *{
            margin-top:0;
        }

        .observ{
            margin-top: 0;
            padding-bottom:25px;
            display:block;
            position:absolute;
            bottom: 0;
        }

        .observ h2{
            display:inline-block;
            vertical-align: middle;
            margin-top: -5px;
        }

        .observ h2:last-child{
            margin-left: -200px;
            padding-top:-5px;
        }

        .dni{
            width: 70px !important;
        }

        #local,#visitante{
            width: 49%;
            position:absolute;
            top:160px;
        }

        #visitante{
            position: absolute;
            right: 0;
        }

        #local .nombre,#visitante .nombre{
            text-transform: lowercase !important;
        }

        .partido{
            margin-top:-100px;
        }
    </style>

</head>

<body>

    <div class="tabla-bottom">
        <img src="assets/web/images/logo_chico.png" width="100" alt=""/>

        <div id="bottom">

            {{--<h2>&nbsp;</h2>--}}

            <div class="arbitraje">
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td>&nbsp;</td>
                        <th class="nombre">Nombre</th>
                        <th>Firma</th>
                    </tr>
                    <tr>
                        <th>Arbitro</th>
                        <td>.</td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <th>Juez de Linea 1</th>
                        <td>.</td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <th>Juez de Linea 2</th>
                        <td>.</td>
                        <td>.</td>
                    </tr>
                </table>
            </div>

        </div>
        <div id="resultadoFinal">
            <h2>Resultado Final</h2>
            <div>
                <table width="20%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="50%">{{$match->HomeTeam->name}}</td>
                        <td width="50%">{{$match->AwayTeam->name}}</td>
                    </tr>
                    <tr>
                        <td width="50%" height="50px;">.</td>
                        <td width="50%" height="50px;">.</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
    <div class="partido">

    <h1>Grilla TFC - Partido del Día</h1>

        <!-- all you need with Tablecloth is a regular, well formed table. No need for id's, class names... -->
        <table cellspacing="0" cellpadding="0" style="margin-top:0">
            <tr>
                <th style="text-align: center">Dia</th>
                <th style="text-align: center">Torneo</th>
                <th style="text-align: center">Sede</th>
                <th style="text-align: center">Cancha</th>
                <th style="text-align: center">Serie</th>
                <th style="text-align: center">Hora</th>
            </tr>
            <tr class="trTable" style="height: 200px !important;">
                <td>{{$match->date}}</td>
                <td>{{$match->FasesWeek->Fases->Tournaments->name}}</td>
                <td>{{$match->Canchas->Sedes->name or ''}}</td>
                <td>{{$match->Canchas->name or '' }}</td>
                <td>{{$match->FasesWeek->Fases->name }}</td>
                <td>{{$match->hour}}</td>
            </tr>

        </table>
    </div>




        <table cellspacing="0" cellpadding="0" id="local">
                    <tr>
                        <th colspan="7">{{$match->HomeTeam->name}}</th>
                    </tr>
                    <tr>
                        <th class="nombre">Nombre</th>
                        <th class="dni">DNI</th>
                        <th style="width:100px;">Firma</th>
                        <th class="vc">N°</th>
                        <th class="vc">A</th>
                        <th class="vc">R</th>
                        <th class="vc">G</th>
                    </tr>
                    <?php $countH = 0; ?>
                    @foreach($match->HomeTeam->Players as $player)


                        @if($player->FasesWeekSanciones($match->FasesWeek->id))
                            <tr class="trTable" bgcolor="#ddd !important">
                                <td>{{$player->fullName()}}</td>
                                <td>{{$player->dni}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                        @else
                            <tr class="trTable" >
                                <td>{{$player->fullName()}}</td>
                                <td>{{$player->dni}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                        @endif

                        <?php $countH++  ?>
                    @endforeach



                    @for($i = $countH ; $i <  25 ; $i++)
                        <tr class="trTable">
                            <td>.</td>
                            <td>.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                    @endfor

                    <tr>
                        <td colspan="2">Firma capitán</td>
                        <td colspan="5" style="height: 20px;"></td>
                    </tr>
                </table>

        <table cellspacing="0" cellpadding="0" id="visitante">
                    <tr>
                        <th colspan="7">{{$match->AwayTeam->name}}</th>
                    </tr>
                    <tr>
                        <th class="nombre">Nombre</th>
                        <th class="dni">DNI</th>
                        <th style="width:100px;">Firma</th>
                        <th>N°</th>
                        <th>A</th>
                        <th>R</th>
                        <th>G</th>

                    </tr>
                    <?php  $countA = 0; ?>
                    @foreach($match->AwayTeam->Players as $player)

                        @if($player->FasesWeekSanciones($match->FasesWeek->id))
                            <tr class="trTable" bgcolor="#ddd !important">
                                <td>{{$player->fullName()}}</td>
                                <td>{{$player->dni}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                        @else
                            <tr class="trTable"  style="height: 200px !important;">
                                <td>{{$player->fullName()}}</td>
                                <td>{{$player->dni}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                        @endif

                        <?php $countA++  ?>
                    @endforeach



                    @for($i = $countA ; $i <  25 ; $i++)
                        <tr class="trTable">
                            <td>.</td>
                            <td>.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                    @endfor

                    <tr>
                        <td colspan="2">Firma capitán</td>
                        <td colspan="5" style="height: 20px;"></td>
                    </tr>

                </table>

    <div class="observ">
        <h2>Observaciones</h2>



        <h2>Informe del arbitro</h2>
    </div>



</body>
</html>
