
    @if($errors->any() )
    <div class="col-xs-12 alert alert-info alert-dismissible" role="alert">

        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        @foreach($errors->all() as $error)
           <li><strong> {{$error}}</strong></li>
        @endforeach
    </div>
    @endif




