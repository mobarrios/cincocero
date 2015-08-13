@extends('index')

@section('content')

    <table class="table ">
            <thead>
            <tr>
                <td>#</td>
                <td>Modulo</td>
                <td>List</td>
                <td>Edit</td>
                <td>Delete</td>
                <td>Store</td>
            </tr>
            </thead>
        <tbody>

            @foreach(\App\Entities\Modules::all() as $modules)
                   <tr>
                       <td>{{$modules->id}}</td>
                       <td>{{$modules->name}}</td>
                    @foreach($modules->Permissions as $permission)
                        @if($permission->profiles_id == $model->id)
                            <td> {{$permission->list}}</td>
                            <td> {{$permission->edit}}</td>
                            <td> {{$permission->delete}}</td>
                            <td> {{$permission->store}}</td>
                        @endif
                    @endforeach
                   </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@stop

