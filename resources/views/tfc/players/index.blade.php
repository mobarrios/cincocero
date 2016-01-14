@extends('index')

@section('content')
    <div class="col-xs-12">
        <a href="{{route($routeNew)}}"  class=" btn btn-xs btn-info">{{trans('messages.btnNew')}}</a>
    </div>

    <hr>

    <div class="table-responsive">
        <table id="dataTable" class="display table  table-striped" style="width: 100%; cellspacing: 0;">
            <thead>
            <tr>
                <th class="no-sort" style="width: 1%;">#</th>

                <th>Foto</th>
                <th>Dni</th>
                <th>Apellido Nombre</th>
                <th>Equipo</th>
                <th>Estado</th>



                <th class="no-sort" style="width: 12%;" ></th>
            </tr>
            </thead>
            {{--<tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
            </tfoot>--}}
            <tbody>
            @foreach($models as $model)
                <tr>
                    <td>{{$model->id}}</td>
                    <td style="width: 15%;">
                            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                                <img width="100%;" src="{{$model->Images->first()->image or ''}}" >
                            </a>
                    </td>
                    <td>{{$model->dni}}</td>
                    <td>{{$model->fullName()}}</td>
                    <td>{{$model->Teams->name}}</td>
                    <td>
                        @if($model->status == 1)
                            <span class="label label-success">Activo</span>
                        @else
                            <span class="label label-danger">Inactivo</span>
                        @endif
                    </td>



                    <td>


                        <a class="btn btn-xs btn-default" href="{{route($routeEdit,$model->id)}}">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-xs btn-default" href="{{route($routeDel ,$model->id)}}">
                            <i class="delete fa fa-trash"></i>
                        </a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

@stop

