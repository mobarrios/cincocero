<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Brands;
use App\Entities\motonet\Categories;
use App\Entities\motonet\Items;
use App\Entities\motonet\Models;
use App\Http\Repositories\motonet\ModelsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;



class webController extends Controller {

    private $categories;
    private $models;
    private $items;
    private $brands;

    public function __construct(Categories $categories, Models $models, Items $items,Brands $brands){
        $this->categories = $categories;
        $this->models= $models;
        $this->items= $items;
        $this->brands= $brands;
    }


    public function index(){
        return view('motonet/web/index');
    }

    public function detail(){
        return view('motonet/web/detail');
    }

    public function find(Request $request)
    {
        if ($request->get('categories')) {
            $cat = $this->categories->find($request->get('categories'));
            return null;
        } elseif ($request->get('models')){
            $m = $this->models->find($request->get('models'));
            return null;
        }elseif($request->get('brands')){
            $b = $request->get('brands');
            $data['result'] = $this->items->where('brands_id',$b)->get();
        }else{
            $find = $request->get('find');
            $data['result'] = $this->items->where('name','%LIKE%',$find)->get();
        }

        dd($data['result']);

        return view('motonet/web/grid')->with($data);
    }

    public function resumen(){
        return view('motonet/web/resumen');
    }

}