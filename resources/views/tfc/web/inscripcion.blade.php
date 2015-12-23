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
    @endsection()