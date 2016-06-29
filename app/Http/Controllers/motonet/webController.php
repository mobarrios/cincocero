<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Branches;
use App\Entities\motonet\Brands;
use App\Entities\motonet\Categories;
use App\Entities\motonet\Items;
use App\Entities\motonet\Models;
use App\Entities\motonet\Operations;
use App\Entities\motonet\Publications;
use App\Http\Repositories\motonet\ModelsRepo as Repo;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
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

        $this->data['publications'] = Publications::where('destacado',1)->where('private','!=',1)->get();

        return view('motonet/web/index')->with($this->data);
    }

    public function detail($id){

        $data['publicationDetail'] = $this->publications->find($id);

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
                                })
                ->where('private','!=',1)
                ->get();
            $data['grid'] = $this->categories->find($request->get('categories'))->name;

        } elseif ($request->get('models')){
            $m = $this->models->find($request->get('models'))->id;
            /*$data['items'] = $this->publications
                                ->whereHas('items',function($q) use($m) {
                                $q->whereHas('models', function ($q) use ($m) {
                                    $q->where('id', $m);
                                });
                            })->get();
            */
            $data['items'] = $this->publications->where('models_id',$m)
                ->where('private','!=',1)
                ->get();
            $data['grid'] = $this->models->find($request->get('models'))->name;

        }elseif($request->get('brands')){
            $b = $this->brands->find($request->get('brands'))->id;
            $data['items'] = $this->publications
                                ->whereHas('models',function($q) use($b) {
                                    $q->whereHas('brands', function ($q) use ($b) {
                                        $q->where('id', $b);
                                    });
                                })->where('private','!=',1)
                ->get();
            $data['grid'] = $this->brands->find($request->get('brands'))->name;
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
                                ->where('private','!=',1)
                                ->get();

            $data['grid'] = "find";
            $data['find'] = $request->get('find');
        }

        return view('motonet/web/grid')->with($data);
    }

    public function resumen($id){

        $publicacion    = $this->publications->find($id);


        if($publicacion->private == 1)
        {
            $creado = new \DateTime($publicacion->created_at);
            $hoy    = new \DateTime(date("Y-m-d"));

            if(date_diff($hoy,$creado)->days >= 2){

                $this->data['publication'] = Publications::where('destacado',1)->where('private','!=',1)->get();

                return redirect()->back()->withErrors('La publicación ha caducado')->with($this->data);
            }

        }

            $this->data['publication'] = $publicacion;




        return view('motonet/web/resumen')->with($this->data);
    }

    public function sucursalDetail($id){
        $data['sucursal'] = $this->branches->find($id);

        return view('motonet/web/branchDetail')->with($data);
    }

    public function mail(){
        return view('emails.mail');
    }

    
}