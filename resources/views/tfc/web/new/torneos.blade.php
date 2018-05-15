@extends('tfc.web.new.template')

@section("css")
    <style>
        .match-list-wrap .match-list-item > div {
            display: inline-block;
            vertical-align: middle;
        }

        .match-list-wrap .match-list-item .team-score {
            color: #ffc722;
            font-size: 16px;
        }

        .match-list-wrap .match-list-item .team-name {
            padding: 0 14px;
            font-size: 16px;
            text-transform: none;
            color: #fff;
        }

        .match-list-wrap .match-list-item .location {
            padding: 0 0 0 17px;
            background: url(../images/location-icon.png) 0 50% no-repeat;
            margin-left: 40px;
            font-size: 14px;
            color: #fff;
            font-family: 'Work Sans';
        }

        .match-list-wrap .match-list-item .va-view-wrap {
            float: right;
        }

        .tm-top-b-box.tm-full-width{
            width: 100% !important;
        }
    </style>
    <style>
        td a {
            color: #ffc722;
        }

        td a:hover {
            color: white;
        }

    </style>
@endsection

@section('content')


    <div class="uk-container uk-container-center">
        <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
            <div class="tm-main uk-width-medium-3-4 uk-push-1-4">
                <main id="tm-content" class="tm-content">
                    <div class="contentpaneopen">
                        <article class="match-article ">
                            <div class="clearfix"></div>
                            <div class="uk-grid">
                                <div class="uk-width-6-10">
                                    <div class="top-text article-single-text">
                                        <div class="big-title">{!! $torneo->name !!} -
                                            <span>{!! $faseActual->name !!}</span></div>

                                    </div>
                                </div>

                            </div>

                            <div class="uk-grid">
                                <div class="uk-width-1-1">
                                    <div class="article-single-text">
                                        <p>
                                        <table class="responsive">
                                            <tbody>
                                            <tr>
                                                <th></th>
                                                <th>Equipo</th>
                                                <th>PTS</th>
                                                <th>PJ</th>
                                                <th>PG</th>
                                                <th>PE</th>
                                                <th>PP</th>
                                                <th>GF</th>
                                                <th>GC</th>
                                                <th>DIF</th>
                                            </tr>

                                            @forelse($tablas as $tabla)
                                                @if($tabla->teams)
                                                    <tr>

                                                        <td>
                                                            <img src="{!! $tabla->teams->images->count() > 0 ? $tabla->teams->images->first()->image : 'assets/web/images/teamDefault.png' !!}"
                                                                 width="35" height="35">
                                                        </td>
                                                        <td>
                                                            <a class="white"
                                                               href="{!! $tabla->teams ? route("new.equipo",[$route,$tabla->teams->id]) : '#' !!}">{!! $tabla->teams->name or '' !!}</a>
                                                        </td>
                                                        <td>{!! $tabla->pts or '0' !!}</td>
                                                        <td>{!! $tabla->pj or '0' !!}</td>
                                                        <td>{!! $tabla->pg or '0' !!}</td>
                                                        <td>{!! $tabla->pe or '0' !!}</td>
                                                        <td>{!! $tabla->pp or '0' !!}</td>
                                                        <td>{!! $tabla->gf or '0' !!}</td>
                                                        <td>{!! $tabla->gc or '0' !!}</td>
                                                        <td>{!! $tabla->dg or '0' !!}</td>
                                                    </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td colspan="10">Sin resultados</td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>


                                        </p>
                                    </div>
                                </div>

                                <!-- Nueva Tabla -->


                                <br><br>

                                <!-- Nuevos Resultados de la Fecha -->

                                <div class="tm-top-b-box tm-full-width" width="100%"><br><br>
                                    <div class="big-title"><img src="images/fair.png" width="50" height="50">Resultados
                                        <span>de la Fecha</span></div>
                                    <div class="uk-container uk-container-center">
                                        <section id="tm-top-b" class="tm-top-b uk-grid"
                                                 data-uk-grid-match="{target:'> div > .uk-panel'}"
                                                 data-uk-grid-margin="">

                                            <div class="uk-width-1-1">
                                                <div class="uk-panel">

                                                    <div class="match-galery">
                                                        @if($faseWeek)
                                                            <div class="wrap uk-vertical-align-middle">
                                                                <font size="3">Fecha
                                                                    N° {!! $faseWeek->name     !!}</font>
                                                            </div>
                                                        @endif
                                                        @if(!$faseWeek  || $faseWeek->count() == 0)
                                                            <div class="va-latest-middle uk-flex uk-flex-middle text-center">
                                                                <p class="text-center">NO HAY PARTIDOS CARGADOS
                                                                    TODAVÍA</p>
                                                            </div>
                                                        @else

                                                    </div>

                                                    @foreach($faseWeek->matches as $partido)
                                                        {{--

                                                        <div class="article-single-text">
                                                            <table>
                                                                <tbody>

                                                                <tr>
                                                                    <td class="logo">
                                                                        @if($partido->home_teams_id != null)
                                                                            <img src="{!! $partido->homeTeam->images->count() > 0 ? $partido->homeTeam->images->first()->image : 'assets/web/images/teamDefault.png' !!}"
                                                                                 class="img-polaroid">
                                                                        @endif
                                                                    </td>
                                                                    <td><font color="#000000">
                                                                            <h4>{!! $partido->homeTeam->name  or 'Libre' !!}</h4>
                                                                        </font>
                                                                    </td>
                                                                    <td>{!! $partido->home_goals or "-" !!}</td>
                                                                    <td> vs</td>
                                                                    <td>{!! $partido->away_goals or "-" !!}</td>
                                                                    <td>
                                                                        <font color="#000000">{!! $partido->awayTeam->name  or 'Libre' !!}</font>
                                                                    </td>
                                                                    <td class="logo">
                                                                        @if($partido->away_teams_id != null)
                                                                            @if($partido->awayTeam)
                                                                                <img src="{!! $partido->awayTeam->images->count() > 0 ? $partido->awayTeam->images->first()->image : 'assets/web/images/teamDefault.png' !!}"
                                                                                     class="img-polaroid">
                                                                            @else
                                                                                <img src="assets/web/images/teamDefault.png"
                                                                                     class="img-polaroid">

                                                                            @endif
                                                                        @endif
                                                                    </td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        --}}

                                                        <div class="va-latest-top">
                                                            <div class="tournament">
                                                                <address><h4>Cancha:{!! $partido->canchas ? $partido->canchas->name : 'A
confirmar' !!} Sede: {!! $partido->canchas ? $partido->canchas->sedes->name
: "A confirmar" !!}<br><br></address>
                                                            </div>

                                                            <div class="date">
                                                                {!!
                                                                $partido->date!!} {!! $partido->hour or 'A confirmar'!!}</div>
                                                        </div>


                                                        <div class="va-latest-middle uk-flex uk-flex-middle">
                                                            <div class="uk-container uk-container-center">
                                                                <div class="uk-grid uk-flex uk-flex-middle">
                                                                    <div class="uk-width-2-12 center">
                                                                        <img width="50" src="{!! $partido->homeTeam->images->count() > 0 ? $partido->homeTeam->images->first()->image : 'assets/web/images/teamDefault.png' !!}" class="img-polaroid">
                                                                    </div>
                                                                    <div class="uk-width-3-12 name uk-vertical-align">
                                                                        <div class="wrap uk-vertical-align-middle">
                                                                            <h4>{!! $partido->homeTeam->name  or 'Libre' !!}</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uk-width-2-12">

                                                                        <div class="table">
                                                                            <div class="left">{!! $partido->home_goals or "-" !!}</div>
                                                                            <div class="right">{!! $partido->away_goals or "-" !!}</div>
                                                                            <div class="uk-clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uk-width-3-12 name alt uk-vertical-align">
                                                                        <div class="wrap uk-vertical-align-middle">
                                                                            <h4>{!! $partido->awayTeam->name  or 'Libre' !!}</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uk-width-2-12 center">
                                                                        @if($partido->away_teams_id != null)
                                                                            @if($partido->awayTeam)
                                                                                <img width="50" src="{!! $partido->awayTeam->images->count() > 0 ? $partido->awayTeam->images->first()->image : 'assets/web/images/teamDefault.png' !!}"
                                                                                     class="img-polaroid">
                                                                            @else
                                                                                <img width="50" src="assets/web/images/teamDefault.png"
                                                                                     class="img-polaroid">

                                                                            @endif
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    @endif


                                                </div>
                                            </div>


                                        </section>
                                    </div>
                                </div>
                                <!-- Fin Nuevos Resultados de la Fecha -->
                                <br><br>

                                <div class="uk-width-1-1">
                                    <div class="match-gallery">
                                        <div dir="ltr" class="uk-slidenav-position" data-uk-slider="">
                                            <div class="uk-slider-container">
                                                <div class="big-title"><img src="images/fair.png" width="50"
                                                                            height="50"> Proxima <span>Fecha</span>
                                                </div>

                                            </div>
                                        </div>
                                        @if($faseWeekProxima)
                                            <div class="meedle-title">Fecha N° {!! $faseWeekProxima->name !!}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-width-1-1">
                                    <div class="article-single-text">

                                        @if(!$faseWeekProxima  || $faseWeekProxima->count() == 0)
                                            <div class="va-latest-middle uk-flex uk-flex-middle text-center">
                                                <p> NO HAY CARGADA UNA PRÓXIMA FECHA </p>
                                            </div>

                                        @else
                                            @foreach($faseWeekProxima->matches as $partido)
                                                <div class="match-list-wrap">
                                                    <div class="match-list-item">
                                                        <div class="date">
                                                            <span>{!! date("d",strtotime($partido->date)) !!}</span>
                                                            {!! date("m",strtotime($partido->date)) !!}
                                                        </div>
                                                        <div class="logo">
                                                            <a href="#">
                                                                {{--                                                                <img src="{!! $partido->homeTeam->images->first()->image  or 'assets/web/images/teamDefault.png' !!}" class="img-polaroid"></a>--}}
                                                                @if($partido->home_teams_id != null)
                                                                    @if($partido->homeTeam)
                                                                        <img src="{!! $partido->homeTeam->images->count() > 0 ? $partido->homeTeam->images->first()->image : 'assets/web/images/teamDefault.png' !!}"
                                                                             class="img-polaroid">
                                                                    @else
                                                                        <img src="assets/web/images/teamDefault.png"
                                                                             class="img-polaroid">
                                                                    @endif

                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="team-name">
                                                            {!! $partido->homeTeam->name  or "Libre" !!}</font>
                                                        </div>
                                                        <div class="team-score">
                                                            vs
                                                        </div>

                                                        <div class="team-name">
                                                            {!! $partido->awayTeam->name  or "Libre" !!}
                                                        </div>
                                                        <div class="logo">
                                                            <a href="#">

                                                                {{--                                                                <img src="{!! $partido->awayTeam->images->first()->image  or 'assets/web/images/teamDefault.png' !!}" class="img-polaroid"></a>--}}

                                                                @if($partido->away_teams_id != null)
                                                                    <img src="{!! $partido->awayTeam->images->count() > 0 ? $partido->awayTeam->images->first()->image : 'assets/web/images/teamDefault.png' !!}"
                                                                         class="img-polaroid">
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="va-view-wrap">
                                                            @if($partido->canchas)
                                                                <a class="view-article"
                                                                   href="{!! route('new.sedeDetalle',[$route,$partido->canchas->sedes->id]) !!}">{!! $partido->hour or 'A confirmar' !!}
                                                                    -
                                                                    Cancha {!! $partido->canchas->name or 'A confirmar' !!}
                                                                </a>
                                                            @else
                                                                A confirmar
                                                            @endif
                                                        </div>
                                                        @if($partido->canchas_id != null)
                                                            <div class="va-view-wrap">
                                                                <a class="view-article"
                                                                   href="{!! route('new.sedeDetalle',[$route,$partido->canchas->sedes->id]) !!}">{!! $partido->canchas->sedes->name !!}</a>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <br>
                                        <br>


                                        <div class="uk-slider-container">
                                            <div class="big-title">
                                                <img src="images/fixture.png" width="50" height="50">Fixture y <span>Resultados</span>
                                            </div>

                                        </div>

                                        <div class="uk-width-medium-2-1">

                                            <!-- This is the container of the toggling elements -->
                                            <ul class="tabs-switch-top" data-uk-switcher="{connect:'#tab-switch'}">
                                                @foreach($fasesWeek as $ind => $fase)
                                                    <li class="{!! $fase->id == $faseActual->id ? "uk-active " : "" !!}"
                                                        aria-expanded="true"><a href="/">{!! $ind+1 !!}</a>
                                                    </li>
                                                @endforeach
                                            </ul>

                                            <!-- This is the container of the content items -->
                                            <ul id="tab-switch" class="uk-switcher tabs-switch-bottom">
                                                @foreach($fasesWeek as $fase)
                                                    <li class="{!! $fase->id == $faseActual->id ? "uk-active " : "" !!}"
                                                        aria-hidden="false">
                                                        <table width="100%" border="0">
                                                            @forelse($fase->Matches as $partido)
                                                                <tr>
                                                                    {{--<td>--}}
                                                                    {{--@if($partido->home_teams_id != null)--}}
                                                                    {{--<img src="{!! $partido->homeTeam->images->count() > 0 ? $partido->homeTeam->images->first()->image : 'assets/web/images/teamDefault.png' !!}" class="img-polaroid" width="30" height="30">--}}
                                                                    {{--@endif--}}

                                                                    {{--</td>--}}
                                                                    <td class="team-name"><font size="3"
                                                                                                color="ffc722">{!! $partido->homeTeam->name or "Libre" !!}
                                                                            &nbsp;</font></td>
                                                                    <td><font size="3"
                                                                              color="ffc722">&nbsp;{!! $partido->home_goals or "-" !!}
                                                                            &nbsp;</font></td>
                                                                    <td><font size="3"
                                                                              color="ffc722">&nbsp;vs&nbsp;</font></td>
                                                                    <td><font size="3"
                                                                              color="ffc722">&nbsp;{!! $partido->away_goals or "-" !!}
                                                                            &nbsp;</font></td>
                                                                    <td class="team-name"><font size="3" color="ffc722">&nbsp;{!! $partido->awayTeam->name or "Libre" !!}</font>
                                                                    </td>
                                                                    {{--<td>--}}

                                                                    {{--@if($partido->away_teams_id != null)--}}
                                                                    {{--<img src="{!! $partido->awayTeam->images->count() > 0 ? $partido->awayTeam->images->first()->image : 'assets/web/images/teamDefault.png' !!}" class="img-polaroid" width="30" height="30">--}}
                                                                    {{--@endif--}}
                                                                    {{--</td>--}}
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                    <td colspan="7">
                                                                        <p class="text-center">No hay partidos en esta
                                                                            fase</p>
                                                                    </td>
                                                                <tr>
                                                            @endforelse

                                                        </table>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>


                                        <div class="uk-slider-container">
                                            <div class="big-title">
                                                <img src="images/sancionados.png" width="50" height="50"> Sancionados de
                                                la <span>Fecha</span></div>

                                        </div>

                                        <div class="uk-width-2-1">
                                            <div class="middle-text article-single-text1">
                                                <table class="responsive" align="center">
                                                    <tbody>
                                                    <tr>
                                                        <th>Desde Fecha</th>
                                                        <th>Hasta Fecha</th>
                                                        <th>Equipo</th>
                                                        <th>Jugador</th>
                                                        <th>Motivo</th>

                                                    </tr>

                                                    @if(!is_null($fasesWeek))
                                                        @forelse(\App\Entities\tfc\Sanciones::whereHas('endSancion', function($q) use ($faseActual){
                                                        $q->where('fases_id', $faseActual->id);
                                                        })->get() as $p)
                                                            <tr>
                                                                <td>{!! $p->StartSancion->name!!}</td>
                                                                <td>{!! $p->EndSancion->name!!}</td>
                                                                <td>{!! $p->players->teams->name !!}</td>
                                                                <td>{!! $p->players->FullName() !!}</td>
                                                                <td>{!! $p->sancion!!}</td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="5">
                                                                    <p class="text-center">No hay sanciones en esta
                                                                        fecha</p>
                                                                </td>
                                                            </tr>
                                                        @endforelse
                                                    @else

                                                    @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <br>
                                        <br>

                                        <div class="uk-slider-container">
                                            <div class="big-title"><img src="images/goleador01.png" width="50"
                                                                        height="50"> Goleadores
                                            </div>
                                        </div>

                                        <div class="uk-width-2-1">
                                            <div class="middle-text article-single-text1">
                                                <table class="responsive" align="center">
                                                    <tbody>
                                                    <tr>
                                                        <th>Jugador</th>
                                                        <th>Equipo</th>
                                                        <th>Goles</th>

                                                    </tr>
                                                    @forelse($goleadores as $goleador)
                                                        <tr>
                                                            <td>{!! $goleador->players !!}</td>
                                                            <td>{!! $goleador->teams !!}</td>
                                                            <td>{!! $goleador->goals !!} goles</td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="3">
                                                                <p class="text-center">No hay goleadores en esta
                                                                    fecha</p>
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <br>
                                        <br>

                                        <div class="uk-slider-container">
                                            <div class="big-title"><img src="images/botin.png" width="50" height="50">
                                                Fair<span>Play</span></div>
                                        </div>

                                        <div class="uk-width-2-1">
                                            <div class="middle-text article-single-text1">
                                                <table class="responsive" align="center">
                                                    <tbody>
                                                    <tr>
                                                        <th>Posicion</th>
                                                        <th>Equipo</th>
                                                        <th><img src="images/roja.png"></th>
                                                        <th><img src="images/amarilla.png"></th>
                                                        <th>Pts</th>
                                                    </tr>
                                                    @forelse($fairplay as $ind => $fp)
                                                        <tr>
                                                            <td>{!! $ind+1 !!}</td>
                                                            <td>{!! $fp->name !!}</td>
                                                            <td>{!! $fp->red !!}</td>
                                                            <td>{!! $fp->yellow !!}</td>
                                                            <td>{{ $fp->puntos }}</td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="5">
                                                                <p class="text-center">No hay registros en esta
                                                                    fecha</p>
                                                            </td>
                                                        </tr>
                                                    @endforelse

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>


                </main>
            </div>


            <aside class="tm-sidebar-a uk-width-medium-1-4 uk-pull-3-4 uk-row-first">
                <div class="uk-panel categories-sidebar">
                    <h3 class="uk-panel-title">Torneo</h3>
                    <div>
                        <ul class="nav menu ">

                            <li class="item-4">
                                <a href="javascript:void(0)">
                                    <font color="#ffc722">{!! $torneo->name !!}</font>
                                </a>
                                @forelse($fases as $fase)
                                    <ul class="">
                                        <li class="item-7">
                                            <a href="{!! route("new.torneos",[$route,$torneo->id,$fase->id]) !!}">
                                                <font color="#ffc722">{!! $fase->name !!}</font>
                                            </a>
                                        </li>
                                    </ul>
                                @empty
                                    <ul class="">
                                        <li class="item-7">
                                            <a href="javascript:void(0)">
                                                <font color="#ffc722">SIN FASES</font>
                                            </a>
                                        </li>
                                    </ul>
                                @endforelse
                            </li>


                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="uk-panel news-sidebar">
                    <h3 class="uk-panel-title">El Tiempo</h3>
                    int(3)
                    <article class="has-context ">
                        <div class="latest-news-wrap">
                            <!-- www.TuTiempo.net - Ancho:189px - Alto:358px -->
                            <div id="TT_viAwYAWAgddBCFMAKAuEkEE1kRlALEI2LdEt1H5FgYGAtwWAg">Pronóstico de Tutiempo.net
                            </div>
                            <script type="text/javascript"
                                    src="http://www.tutiempo.net/widget/eltiempo_viAwYAWAgddBCFMAKAuEkEE1kRlALEI2LdEt1H5FgYGAtwWAg"></script>
                        </div>
                    </article>

                    <hr>

                    <h3 class="uk-panel-title">The futbol STORE</h3>
                    <article class="has-context ">
                        <div class="latest-news-wrap" style="padding-bottom: 36px;">
                            <a href="https://www.thefutbolstore.com.ar">
                                <img src="{{ asset('thefutbolstore.jpg') }}" alt="" style="max-width:87%">
                            </a>
                        </div>
                    </article>

                </div>
            </aside>
        </div>
    </div>


@endsection

@section('js')
    <script type="text/javascript">
        new SimpleCounter("countdown4", 1447448400, {
            'continue': 0,
            format: '{D} {H} {M} {S}',
            lang: {
                d: {
                    single: 'day',
                    plural: 'days'
                }, //days
                h: {
                    single: 'hr',
                    plural: 'hrs'
                }, //hours
                m: {
                    single: 'min',
                    plural: 'min'
                }, //minutes
                s: {
                    single: 'sec',
                    plural: 'sec'
                } //seconds
            },
            formats: {
                full: "<span class='countdown_number' style='color:  '>{number} </span> <span class='countdown_word' style='color:  '>{word}</span> <span class='countdown_separator'>:</span>", //Format for full units representation
                shrt: "<span class='countdown_number' style='color:  '>{number} </span>" //Format for short unit representation
            }
        });
    </script>
@endsection