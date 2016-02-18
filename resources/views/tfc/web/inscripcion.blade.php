@extends('tfc/web/template')
    @section('content')
        @include('tfc/web/leftbar/leftbar')
        <div class="center-col">

            <center>
                <div class="breadcrumb clearfix">inscripcion online<span class="bottom-line"></span>
                </div></center>
            <!-- breadcrumb -->

            <div class="elements-box">

                <div class="row"><!-- col-md-4 --><!-- col-md-8 -->
                    <div id="contact-box">
                        <h5 class="contact-title clearfix">&nbsp;</h5>
                        <div class="col-md-8 col-md-offset-2">


                            {!! Form::open(['route'=>'postRegistration','class'=>'form contact-form','files' => true]) !!}

                            <div class="mb-20 mb-md-10">
                                <ul>
                               @if($errors->count()!= 0)
                                  @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                  @endforeach
                               @endif
                                </ul>
                            </div>


                            <div class="mb-20 mb-md-10">
                                    {!! Form::text('dni',null ,['class'=>'input-md form-control','placeholder'=>'DNI']) !!}
                                </div>
                                <div class="mb-20 mb-md-10">
                                    {!! Form::text('last_name',null ,['class'=>'input-md form-control','placeholder'=>'Apellido']) !!}
                                </div>
                                <div class="mb-20 mb-md-10">
                                    {!! Form::text('name',null ,['class'=>'input-md form-control','placeholder'=>'Nombre']) !!}
                                </div>
                                <div class="mb-20 mb-md-10">
                                    {!! Form::text('mail',null ,['class'=>'input-md form-control','placeholder'=>'E-Mail']) !!}
                                </div>
                                <div class="mb-20 mb-md-10">
                                    {!! Form::text('phone',null ,['class'=>'input-md form-control','placeholder'=>'Teléfono fijo']) !!}
                                </div>
                                <div class="mb-20 mb-md-10">
                                    {!! Form::text('cel',null ,['class'=>'input-md form-control','placeholder'=>'Celular']) !!}
                                </div>
                                <div class="mb-20 mb-md-10 form-group">
                                    <label for="image">FOTO DEL JUGADOR</label>
                                    {!! Form::file('image',['class'=>'input-md form-control']) !!}
                                </div>
                                <div class="mb-20 mb-md-10 form-group selectEquipos">
                                    {!! Form::select('teams_id',['0'=>'Seleccionar Equipo'] + $teams ,['class'=>'input-md form-control','required'=>'required']) !!}
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password"  required>
                                </div>
                            <hr>
                                <div class="mb-20 mb-md-10 form-group termsyconds">
                                    <h4 class="modal-title text-center" style="color:#376906;">TÉRMINOS Y CONDICIONES DEL SITIO</h4>
                                    <p>

                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque feugiat metus nec mi varius, nec maximus sapien ultrices. Morbi efficitur lobortis urna, at pharetra ipsum. Ut rutrum ac sem ut sodales. Etiam nec laoreet neque, id placerat sem. Nunc viverra, sem in rhoncus ullamcorper, nisl lectus sodales turpis, ut gravida ipsum magna vitae tellus. Ut luctus, quam non malesuada accumsan, libero urna porttitor lectus, pharetra auctor nunc massa finibus lorem. Pellentesque feugiat, eros nec placerat posuere, purus nulla rhoncus nisi, quis sagittis nibh ex vitae risus. Quisque orci enim, porttitor sit amet sapien ut, dapibus dignissim odio. Suspendisse quis lorem eros. Fusce eu ligula purus. Sed pulvinar id dolor a vehicula.

                                        Donec eget nisl ut tortor cursus maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis iaculis ex. Nunc sit amet egestas sapien, nec malesuada orci. Proin rhoncus viverra odio, non viverra orci aliquet quis. Pellentesque vitae quam sem. Aliquam ultricies dolor dui, at tempor nisl feugiat sed. Morbi molestie nulla vel quam congue rutrum. Integer tincidunt id lorem eget maximus. Suspendisse libero ligula, imperdiet et auctor fringilla, iaculis id est. Mauris suscipit vel velit eget consectetur. Curabitur ipsum dolor, ultricies quis elit a, faucibus congue ipsum. Pellentesque in odio imperdiet, dapibus erat et, maximus urna. Mauris varius mattis orci, at dapibus mi laoreet ac. Pellentesque dignissim dolor erat, pretium varius libero pharetra a. Donec at nunc et sapien pellentesque cursus.

                                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam maximus nisl at commodo convallis. Proin ac orci nulla. Sed dignissim, orci at condimentum dapibus, elit ligula gravida nunc, ac maximus lacus nulla vel eros. Proin porta finibus mollis. Aliquam erat volutpat. Praesent consectetur, purus eget ullamcorper semper, neque nulla mollis tellus, vitae tristique odio turpis in quam. Integer auctor, est ac semper sodales, sem enim semper tortor, quis tempor ligula est in nisl. Fusce eleifend elementum lectus, eget facilisis neque placerat et. Integer mi purus, condimentum a vestibulum in, varius ut sem. Quisque lacus nibh, iaculis vitae justo in, fermentum pulvinar tellus. Suspendisse nec arcu nec nisl suscipit volutpat suscipit ac sem. Aliquam congue sit amet nisi ac viverra. Proin at lectus et turpis accumsan posuere.

                                        Nunc ac urna at dui consectetur lobortis. Ut risus orci, blandit vel orci sit amet, tristique finibus augue. Aenean dolor neque, tincidunt in mattis sit amet, molestie a diam. Nulla nec condimentum metus, at pulvinar lacus. Nunc faucibus, diam laoreet mattis congue, neque magna imperdiet nulla, vel ornare magna dolor vel justo. Sed at pellentesque erat. In hac habitasse platea dictumst. Quisque in tincidunt metus.

                                        Sed arcu arcu, mollis sed libero sit amet, dapibus feugiat dui. In sed sem ac magna placerat vestibulum non eget orci. Phasellus maximus arcu sit amet lectus lacinia luctus. Nam non velit quis augue mollis aliquam at in nisl. Cras pellentesque lorem ut mollis tristique. Nullam eget diam nec turpis egestas lacinia. Morbi laoreet laoreet lacus, a aliquam massa commodo et. Praesent pharetra efficitur bibendum. Donec venenatis magna ipsum, eget porta magna consequat sed. Etiam condimentum mi cursus vulputate finibus. Pellentesque neque nibh, auctor nec ultrices mattis, elementum eget lorem. Maecenas facilisis tortor ut sem mattis, vel viverra metus auctor. Phasellus at massa sapien. </p>
                                    <label class="text-center" style="display:block;font-size:1.2em;">Acepto términos y condiciones <input type="checkbox" name="terms" value="terms" class="input-md" required></label>
                                </div>
                                <div class="pt-10">
                                    <button class="submit_btn btn btn-mod btn-medium btn-round btn-full" id="reg-btn">Enviar Solicitud</button>
                                </div>


                            {!! Form::close() !!}



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