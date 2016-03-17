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
            height: 15px !important;

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
            width:10% !important;
        }

        .sancionado{
            /*background-color: #b3b3b3 !important;*/
        }


        #res > table{
            width:49%;
            margin-top:0;
        }

        #local{
            position:absolute;
            left:0;
        }

        #visitante{
            position:absolute;
            right:0;
        }

        #resultadoFinal{
            position: absolute;
            bottom:100px;
            left:65%;
            width:30%;
        }


        #bottom{
            position:absolute;
            bottom:90px;
            width:60%;
        }

        #bottom table *{
            height:25px !important;
        }

        #resultadoFinal *, #bottom *{
            border:none;
        }

        #resultadoFinal div table td{
            /*border:1px solid black !important;*/
            background-color: #ddd !important;
            padding:5px 0;
        }

        #observaciones{
            position: absolute;
            bottom:30px;
        }

        #observaciones *{
            border:none;

        }

        img{
            position:absolute;
            bottom:0;
            right:0;
        }

    </style>

</head>

<body>
    <img src="logo-white.png" width="306" height="70" alt=""/>

    <div id="resultadoFinal">
        <h2>Resultado Final</h2>
        <div>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="50%">{{$match->HomeTeam->name}}</td>
                    <td width="50%">.</td>
                </tr>
                <hr>
                <tr>
                    <td width="50%">{{$match->AwayTeam->name}}</td>
                    <td width="50%">.</td>
                </tr>
            </table>
        </div>
    </div>

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
            <tr class="trTable">
                <td>{{$match->date}}</td>
                <td>Bundesliga</td>
                <td>{{$match->Canchas->Sedes->name or ''}}</td>
                <td>{{$match->Canchas->name or '' }}</td>
                <td>{{$match->FasesWeek->Fases->name }}</td>
                <td>{{$match->hour}}</td>
            </tr>

        </table>

        <div id="res">


        <table cellspacing="0" cellpadding="0" id="local">
                <tr>
                    <th colspan="8">{{$match->HomeTeam->name}}</th>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Firma</th>
                    <th class="vc">N°</th>
                    <th class="vc">Amar.</th>
                    <th class="vc">Roja</th>
                    <th class="vc">Goles</th>
                    <th>Observaciones</th>
                </tr>
                <?php  $countH = 0; ?>
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
                            <td>SANCIONADO</td>
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
                        <td></td>
                    </tr>
                @endfor


            </table>

            <table cellspacing="0" cellpadding="0" id="visitante">
                <tr>
                    <th colspan="8">{{$match->AwayTeam->name}}</th>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Firma</th>
                    <th>N°</th>
                    <th>Amarilla</th>
                    <th>Roja</th>
                    <th>Goles</th>
                    <th>Observaciones</th>
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
                            <td>SANCIONADO</td>
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
                            <td></td>
                        </tr>
                    @endif

                    <?php $countA++  ?>
                @endforeach



                @for($i = $countA ; $i <  25 ; $i++)
                    <tr class="trTable">
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endfor


            </table>
        </div>
    <br>

        <div id="bottom">

            <h2>&nbsp;</h2>

            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td>&nbsp;</td>
                    <th>Nombre</th>
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
            <div id="observaciones">
                <h2>Observaciones</h2>

                <table width="38%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="82%">Campo de Observaciones</td>
                    </tr>
                </table>
            </div>



</body>
</html>