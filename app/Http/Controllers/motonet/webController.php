<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Brands;
use App\Entities\motonet\Categories;
use App\Entities\motonet\Items;
use App\Entities\motonet\Models;
use App\Entities\motonet\Publications;
use App\Http\Repositories\motonet\ModelsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;



class webController extends Controller {

    private $categories;
    private $models;
    private $items;
    private $brands;
    private $data;
    private $publications;

    public function __construct(Categories $categories, Models $models, Items $items,Brands $brands,Publications $publications){
        $this->categories = $categories;
        $this->models= $models;
        $this->items= $items;
        $this->brands= $brands;
        $this->publications = $publications;
    }


    public function index(){

        $this->data['publications'] = Publications::where('destacado',1)->get();

        return view('motonet/web/index')->with($this->data);
    }

    public function detail($id){

        $data['publication'] = $this->publications->find($id);

        return view('motonet/web/detail')->with($data);
    }

    public function find(Request $request)
    {
        if ($request->get('categories')) {
            $cat = $this->categories->find($request->get('categories'));
            $data['items'] = $cat->Items;

        } elseif ($request->get('models')){
            $m = $this->models->find($request->get('models'));
            $data['items'] = $this->items->where('models_id',$m->id)->get();
        }elseif($request->get('brands')){
            $b = $request->get('brands');
            $data['items'] = $this->items->where('brands_id',$b)->get();
        }else{
            $find = $request->get('find');
            $data['items'] = $this->items->where('name','%like%',$find)->get();
        }

        return view('motonet/web/grid')->with($data);
    }

    public function resumen($id){
        $data['item'] = $this->items->find($id);
        return view('motonet/web/resumen')->with($data);
    }

}