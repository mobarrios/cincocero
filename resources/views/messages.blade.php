
    @if($errors->any())
        <div id="msg" style="display: none">
            @foreach($errors->all() as $error)
                <p class="error">{{$error}}</p>
            @endforeach
        </div>
    @endif




