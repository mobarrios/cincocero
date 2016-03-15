
    @if($errors->any())
        <div id="msg">
            @foreach($errors->all() as $error)
                <p class="error">{{$error}}</p>
            @endforeach
        </div>
    @endif




