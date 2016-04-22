@extends('index')

    @section('content')

        <div class="panel ">
            <div class=" panel-heading">
                <a href="{{route($routeNew)}}"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> </a>
                <button type="button" class="btn btn-sm btn-default"> <i class="fa fa-file-excel-o"></i> </button>
                <button type="button" class="btn btn-sm btn-default"> <i class="fa fa-print"></i> </button>
            </div>

            <div class=" panel-body">

                <table id="dataTable" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="no-sort" style="width: 1%;">#</th>
                        <th>Imagen</th>
                        <th>Fecha Publicación</th>
                        <th>Titulo</th>
                        <th>Artículo</th>
                        <th>Destacado</th>
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
                            <td class="col-xs-1">
                                @foreach($model->Images as $image)
                                    <div class="panel3 panel-default">
                                        <div class="panel3-body">
                                            <a href="{{$image->image}}" title="{!! $model->name !!}" class="zoom" data-title="{!! $model->name !!}" data-type="image" data-toggle="lightbox">
                                                <img width="100%;" src="{{$image->image}}">
                                                <span class="overlay"><i class="fa fa-arrows-alt"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </td>
                            <td>{{$model->publication_date}}</td>
                            <td>{{$model->title}}</td>
                            <td>{{$model->Items->name}}</td>
                            <td>
                                @if($model->destacado)
                                    <label class="label label-success">Aviso Destacado</label>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-sm btn-default" href="{{route($routeEdit,$model->id)}}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a class="btn btn-sm btn-default" href="{{route($routeDel ,$model->id)}}">
                                    <i class="delete fa fa-trash"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach


            </div>
        </div>



    @endsection

@stop

