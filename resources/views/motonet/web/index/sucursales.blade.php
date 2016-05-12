<div class="container">
    <h1>Sucursales</h1>
    @foreach(\App\Entities\motonet\Branches::all() as $sucursal)
    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="thumbnail h374">
            <img src="{!! $sucursal->images->first()->image or "" !!}" alt="{!! $sucursal->name !!}">
            <div class="caption">
                <h3>{!! $sucursal->name !!}</h3>
                @if($sucursal->city != "")
                    <p>{!! $sucursal->city !!}</p>
                @endif
                @if($sucursal->phone != "")
                    <p>{!! $sucursal->phone !!}</p>
                @endif
                @if($sucursal->address != "")
                    <p>{!! $sucursal->address !!}</p>
                @endif
                <p class="bottom-right"><a href="{!! route('sucursal.detail',$sucursal->id) !!}" class="btn btn-xs btn-outline btn-primary btn-mot" role="button">Ver mapa</a></p>
            </div>
        </div>
    </div>
    @endforeach
</div>