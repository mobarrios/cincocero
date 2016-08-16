<div class="row wrapper border-bottom white-bg page-heading pt-30">

    <div class="col-lg-10">
        {{--<h2>Cuatriciclo BKS 500 4×4</h2>--}}
        <ol class="breadcrumb">
            <li>
                <a href="{!! asset('') !!}">Home</a>
            </li>
            @if(isset($items))
                @if($grid == "find")
                    <li class="active">
                        <a>Resultados para {!! $find !!}</a>
                    </li>
                @else
                    <li class="active">
                        <a>{!! $grid !!}</a>
                    </li>
                @endif
            @elseif(isset($publicationDetail))
                <li>
                    <a href="{!! route('productFind',"brands=".$publicationDetail->models->brands->id) !!}">{!! $publicationDetail->models->brands->name !!}</a>
                </li>
                <li>
                    <a href="{!! route('productFind',"models=".$publicationDetail->models->id) !!}">{!! $publicationDetail->models->name !!}</a>
                </li>
                <li class="active">
                    <a>{!! $publicationDetail->title !!}</a>
                </li>
            @elseif(isset($publication))
                <li>
                    <a href="{!! route('productFind',"brands=".$publication->models->brands->id) !!}">{!! $publication->models->brands->name !!}</a>
                </li>
                <li>
                    <a href="{!! route('productFind',"models=".$publication->models->id) !!}">{!! $publication->models->name !!}</a>
                </li>
                <li>
                    <a href="{!! route('productDetail',$publication->id) !!}">{!! $publication->title !!}</a>
                </li>
                <li class="active">
                    <a>Resumen de compra</a>
                </li>
            @elseif(isset($sucursal))
                <li class="active">
                    <a>Sucursal {!! $sucursal->name !!}</a>
                </li>
            @endif
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>