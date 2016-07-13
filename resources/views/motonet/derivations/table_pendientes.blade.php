<table class="table table-striped table-hover">
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
    @foreach($pendientes as $model)
        <tr>
            <td>
                @if(isset($routeDetail))
                    <a href="{{route($routeDetail, $model->id)}}">{{$model->id}}</a>
            @else
                {{$model->id}}
            @endif


            @foreach($tableHeader['columns'] as $column)

                @if(!is_null($column['relation']))
                    @if($column['data'] == 'Categories')
                        @if($model->$column['data']->count() > 1)
                            <td>|
                                @foreach($model->$column['data'] as $d)
                                    {{ $d->$column['relation'] }} |
                                @endforeach
                            </td>
                        @else
                            <td>{{$model->$column['data']->first()->$column['relation']}}</td>
                        @endif
                    @else
                        <td>{{$model->$column['data']->$column['relation']}}</td>
                    @endif
                @else

                    @if($column['data'] == 'images')

                        @if(is_null($model->$column['data']))
                            <td></td>
                        @else
                            <td style="width: 5%;">
                                @foreach($model->$column['data'] as $image)
                                    <div class="panel3 panel-default">
                                        <div class="panel3-body">
                                            <a href="{{$image->image}}" title="{!! $model->name !!}" class="zoom" data-title="{!! $model->name !!}" data-type="image" data-toggle="lightbox">
                                                <img width="100%;" src="{{$image->image}}">
                                                <span class="overlay"><i class="fa fa-arrows-alt"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    {{--<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">--}}
                                    {{--<img width="100%;" src="{{$image->image}}" >--}}
                                    {{--</a>--}}
                                @endforeach
                            </td>
                        @endif

                    @else
                        <td>{{$model->$column['data']}}</td>
                    @endif
                @endif

            @endforeach

            <td class="col-xs-3">

                @if($model->status != 2)
                    <a class="btn btn-sm btn-info" href="{{route($routeTomar ,$model->id)}}">
                        <i class="fa fa-phone"></i>
                    </a>
                    <a class="btn btn-sm btn-default" href="{{route($routeEdit,$model->id)}}">
                        <i class="fa fa-pencil"></i>
                    </a>
                @else
                    <a class="btn btn-sm btn-danger disabled" href="#">
                        <i class="fa fa-phone"></i>
                    </a>
                    <a class="btn btn-sm btn-default disabled" href="#">
                        <i class="fa fa-pencil"></i>
                    </a>
                @endif
                <a class="del btn btn-sm btn-default" href="{{route($routeDel ,$model->id)}}">
                    <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-sm btn-default" href="{{route($routeDerivationMessages,$model->id)}}">
                    <i class="fa fa-sitemap"></i>
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>