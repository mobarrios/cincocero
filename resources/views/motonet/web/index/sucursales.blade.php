<div class="col-xs-12">
    <h2>Sucursales</h2>
    <hr>
    <div class="slick_demo_2">
    @foreach(\App\Entities\motonet\Branches::all() as $sucursal)
    <div>
        <div class="ibox-content">
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
    </div>

    @endforeach
    </div>


</div>