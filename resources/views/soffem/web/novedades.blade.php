<section id="novedades" class="container services">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Novedades</h1>
                <p>Utilmas noticias destacadas de la Liga. </p>
            </div>
    {{--<div class="row">--}}
        {{--<div class="col-xs-3 thumbnail">--}}
            {{--<img class="img-thumbnail" src="img/novedades1.jpg">--}}
            {{--<h4>Novedades 1</h4>--}}
        {{--</div>--}}
    {{--</div>--}}
</section>

<br>

<div class="container">
    <div class="row">
        <section id="pinBoot">

            @foreach($novedades as $novedad)
                <article class="white-panel"><img src="{{$novedad->images->first()->image}}" alt="">
                    <h4><a href="#">{{$novedad->title}}</a></h4>
                    <p>
                    {!! $novedad->detail !!}
                    <hr>
                    <a href="#" class="btn btn-block btn-primary">Ver</a>
                </article>
            @endforeach
            

        </section>


        <hr>


    </div>

</div>