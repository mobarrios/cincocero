<table id="dataTable" class="display table table-striped" style="width: 100%; cellspacing: 0;">
    <thead>
    <tr>
        <th class="no-sort" style="width: 1%;">#</th>
        @foreach($tableHeader['columns'] as $column => $data)
            <th>{{$column}}</th>
        @endforeach
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
            <td>
                @if(isset($routeDetail))
                     <a href="{{route($routeDetail, $model->id)}}">{{$model->id}}</a>
                @else
                     {{$model->id}}
                @endif


                @foreach($tableHeader['columns'] as $column)

                    @if(!is_null($column['relation']))
                        <td>{{$model->$column['data']->$column['relation']}}</td>
                    @else

                         @if($column['data'] == 'images')

                            @if(is_null($model->$column['data']))
                               <td></td>
                            @else
                                <td>
                                    @foreach($model->$column['data'] as $image)
                                        <img class="thumbnail" src="{{$image->image}}" width="50px">
                                    @endforeach
                                </td>
                            @endif

                        @else

                              <td>{{$model->$column['data']}}</td>
                         @endif
                    @endif

                @endforeach

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