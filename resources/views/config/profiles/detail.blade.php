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
                            <td>
                                @if($permission->list) <a href="{{route('changePermission',[$permission->id,'list','0'])}}" class="btn btn-xs btn-success">si</a> @else <a href="{{route('changePermission',[$permission->id,'list','1'])}}" class="btn btn-xs btn-danger">no</a>  @endif
                            </td>
                            <td>
                                @if($permission->edit) <a href="{{route('changePermission',[$permission->id,'edit','0'])}}" class="btn btn-xs btn-success">si</a> @else <a href="{{route('changePermission',[$permission->id,'edit','1'])}}" class="btn btn-xs btn-danger">no</a>  @endif
                            </td>
                            <td>
                                @if($permission->delete) <a href="{{route('changePermission',[$permission->id,'delete','0'])}}" class="btn btn-xs btn-success">si</a> @else <a href="{{route('changePermission',[$permission->id,'delete','1'])}}" class="btn btn-xs btn-danger">no</a>  @endif
                            </td>
                            <td>
                                @if($permission->store) <a href="{{route('changePermission',[$permission->id,'store','0'])}}" class="btn btn-xs btn-success">si</a> @else <a href="{{route('changePermission',[$permission->id,'store','1'])}}" class="btn btn-xs btn-danger">no</a>  @endif
                            </td>
                        @endif
                    @endforeach
                   </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@stop

