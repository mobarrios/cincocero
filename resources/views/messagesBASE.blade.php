
    @if($errors->any())
        <div class="col-xs-12 alert alert-danger alert-dismissible navbar-fixed-bottom" role="alert" style="width: 98%;margin:auto;bottom:10px;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <ul>
            @foreach($errors->all() as $error)
               <li><strong> {{$error}}</strong></li>
            @endforeach
            </ul>
        </div>
    @endif




