<div class="col-xs-12">
    <div class="slick_demo_2">
    @foreach(\App\Entities\motonet\Brands::all() as $brand)
    <div>
        <div class="ibox-content" style="background-color:whitesmoke">
            <div class="thumbnail h-150">
                <img src="{!! $brand->images->first()->image or "" !!}" alt="{!! $brand->name !!}" class="img-responsive">
            </div>
        </div>
    </div>

    @endforeach
    </div>


</div>