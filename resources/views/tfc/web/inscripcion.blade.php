@extends('tfc/web/template')
    @section('content')
        <div class="center-col">

            <center>
                <div class="breadcrumb clearfix">inscripcion online<span class="bottom-line"></span>
                </div></center>
            <!-- breadcrumb -->

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                    <div id="contact-box">
                        <h5 class="contact-title clearfix">&nbsp;</h5>
                        <div class="col-md-4 col-md-offset-4">
                            <form class="form contact-form" id="contact_form">
                                <div class="clearfix">
                                    <!-- Username -->
                                    <div class="mb-20 mb-md-10">
                                        <select name="select" class="input-md form-control">
                                            <option>Seleccione Liga</option>
                                            <option>Liga TFC Champions</option>
                                            <option>Bundesliga</option>
                                            <option>Le Championnat</option>
                                            <option>Premier League</option>
                                            <option>Lega Calciot</option>
                                        </select>
                                    </div>
                                    <!-- Password -->
                                    <div class="mb-20 mb-md-10">
                                        <select name="select" class="input-md form-control">
                                            <option>Seleccione Equipo</option>
                                            <option>Equipo 1</option>
                                            <option>Equipo 2</option>
                                            <option>Equipo 3</option>
                                            <option>Equipo 4</option>
                                            <option>Equipo 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password" pattern=".{5,100}" required>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <!-- Send Button -->
                                    <div class="pt-10">
                                        <button class="submit_btn btn btn-mod btn-medium btn-round btn-full" id="reg-btn">Acceder</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <div id="response"></div>
                    </div></div>
                <p>&nbsp;</p>
                <center><!-- row --></center>
                <!-- row --><!-- row --><!-- row -->

                <div class="row"></div>
                <!-- row --><!-- row --><!-- row --><!-- row --><!-- row --><!-- row -->

            </div>
            <!-- elements-box -->

        </div>
        <!-- center-col -->

        <div class="sidebar right-sidebar widget-area-5">

            <div class="widget widget_nav_menu">
                <h2 class="widget-title">MENU</h2>
                <div class="menu-all-pages-container">
                    <ul class="menu" id="menu-all-pages">
                        </span>
                        <br><br><br>
                        </span>
                    </ul>
                </div>
            </div>
            <!-- widget_nav_menu --><!-- punica-socials-link-widget --><!-- widget --><!-- punica-news-letter-widget --><!-- punica-adv-widget --><!-- punica-twitter-widget --><!-- punica-poll-widget -->

        </div>
        <!-- right-sidebar -->

        <div class="clear"></div>
        <!-- widget-area-6 -->
    @endseccion()