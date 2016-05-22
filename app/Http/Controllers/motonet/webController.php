<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Branches;
use App\Entities\motonet\Brands;
use App\Entities\motonet\Categories;
use App\Entities\motonet\Items;
use App\Entities\motonet\Models;
use App\Entities\motonet\Publications;
use App\Http\Repositories\motonet\ModelsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class webController extends Controller {

    private $categories;
    private $models;
    private $items;
    private $brands;
    private $data;
    private $publications;
    private $branches;

    public function __construct(Categories $categories, Models $models, Items $items,Brands $brands,Publications $publications,Branches $branches){
        $this->categories = $categories;
        $this->models= $models;
        $this->items= $items;
        $this->brands= $brands;
        $this->publications = $publications;
        $this->branches = $branches;
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
            $cat = $this->categories->find($request->get('categories'))->id;

            $data['items'] = $this->publications
                                ->whereHas('models', function ($q) use($cat){
                                    $q->whereHas('categories', function ($q) use ($cat){
                                        $q->where('categories.id',$cat);
                                    });
                                })->get();

        } elseif ($request->get('models')){
            $m = $this->models->find($request->get('models'))->id;
            /*$data['items'] = $this->publications
                                ->whereHas('items',function($q) use($m) {
                                $q->whereHas('models', function ($q) use ($m) {
                                    $q->where('id', $m);
                                });
                            })->get();
            */
            $data['items'] = $this->publications->where('models_id',$m)->get();

        }elseif($request->get('brands')){
            $b = $this->brands->find($request->get('brands'))->id;
            $data['items'] = $this->publications
                                ->whereHas('models',function($q) use($b) {
                                    $q->whereHas('brands', function ($q) use ($b) {
                                        $q->where('id', $b);
                                    });
                                })->get();
        }else{
            $find = $request->get('find');
            $data['items'] = $this->publications
                                ->where('title','like','%'.$find.'%')
                                ->orWhereHas('models',function($q) use($find){
                                    $q->whereHas('categories',function($q) use($find) {
                                        $q->where('name', 'like', '%' . $find . '%');
                                    });
                                })
                                ->orWhereHas('models',function($q) use($find){
                                    $q->whereHas('brands',function($q) use($find) {
                                        $q->where('name','like','%'.$find.'%');
                                    });
                                })
                                ->orWhereHas('models',function($q) use($find){

                                        $q->where('name','like','%'.$find.'%');

                                })
                                ->get();
        }

        return view('motonet/web/grid')->with($data);
    }

    public function resumen($id){

        $data['publication']    = $this->publications->find($id);
        //setcookie('publication_id', $data['publication']->id, time() + (86400 * 30), '/' );

        Cookie::queue(Cookie::make('publication_id', $data['publication']->id , 0));

        //Cookie::make('publication_id',$data['publication']->id);


        return view('motonet/web/resumen')->with($data);
    }

    public function sucursalDetail($id){
        $data['sucursal'] = $this->branches->find($id);

        return view('motonet/web/branchDetail')->with($data);
    }

    public function mail(){
        return view('emails.mail');
    }
}