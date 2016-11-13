@extends('tfc.web.new.template')

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
                                            <div class="big-title">{!! $equipo->name !!}</div>
                                        </div>
                                    </div>
                                </div>

                                <img src="{!! $equipo->images->first()->image or 'assets/web/images/teamDefault2.png' !!}">

                                <br>
                                <br>

                                <div class="uk-slider-container">
                                    <div class="big-title"><img src="images/botin.png" width="50" height="50"> Jugadores </div>
                                                    
                                </div>

                                <div class="uk-width-2-1">
                                    <div class="middle-text article-single-text1">
                                        <table class="responsive" align="center">
                                            <tbody>
                                                <tr>
                                                    <th>Jugador</th>
                                                    <th><img src="images/amarilla.png"></th>
                                                    <th>
                                                        <img src="images/roja.png">
                                                    </th>
                                                    <th>Goles</th>
                                                </tr>

                                                @forelse($equipo->players as $jugadores)
                                                    <tr>
                                                        <td>{!! $jugadores->fullName()!!}</td>
                                                        <td>{!! $jugadores->Amarillas($jugadores->id)!!}</td>
                                                        <td>{!! $jugadores->Rojas($jugadores->id)!!}</td>
                                                        <td>{!! $jugadores->Goles($jugadores->id)!!}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="4">
                                                            <p class="text-center">El equipo no tiene jugadores todavía</p>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </article>
                        </div>

                    </main>
                </div>

                <aside class="tm-sidebar-a uk-width-medium-1-4 uk-pull-3-4 uk-row-first">
                    <div class="uk-panel categories-sidebar">
                        <h3 class="uk-panel-title">El Tiempo</h3>
                        int(3)
                        <article class="has-context ">
                            <div class="latest-news-wrap">
                                <!-- www.TuTiempo.net - Ancho:189px - Alto:358px -->
                                <div id="TT_viAwYAWAgddBCFMAKAuEkEE1kRlALEI2LdEt1H5FgYGAtwWAg">Pron?stico de Tutiempo.net</div>
                                <script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_viAwYAWAgddBCFMAKAuEkEE1kRlALEI2LdEt1H5FgYGAtwWAg"></script>
                            </div>
                        </article>
                        <div class="clearfix"> </div>
                    </div>
                </aside>
            </div>
        </div>

@endsection