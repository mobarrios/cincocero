
    @if($errors->any())
        <div id="msg" class="alert alert-warning alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            @foreach($errors->all() as $error)
                <p class="error">{{$error}}</p>
            @endforeach
        </div>
    @endif




