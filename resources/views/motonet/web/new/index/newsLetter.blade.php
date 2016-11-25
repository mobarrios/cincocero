<div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
    <div class="sidebar-widget-body outer-top-xs">
        <p>Suscribite a nuestro Newsletter!</p>
        {!! Form::open(['route' => 'newsletter', 'method' => 'POST', 'class' => 'form','id' => 'Newsletter']) !!}
            <div class="form-group">
                <label class="sr-only" for="exampleInputEmail1">Email</label>
                {!! Form::text('email',null,['placeholder' => "Subscribite a nuestro newsletter", 'class' => 'form-control']) !!}
            </div>
            <button class="btn btn-primary">Subscribite</button>
        {!! Form::close() !!}
    </div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->