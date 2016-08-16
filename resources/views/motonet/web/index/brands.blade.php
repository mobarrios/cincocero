<div class="col-xs-12">
    @foreach(\App\Entities\motonet\Brands::all() as $brand)
    <div>
        <div class="col-xs-1" >
            <div class="thumbnail">
                <img src="{!! $brand->images->first()->image or "" !!}" alt="{!! $brand->name !!}" class="img-responsive">
            </div>
        </div>
    </div>

    @endforeach



</div>