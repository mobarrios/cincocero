<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Branches;
use App\Entities\motonet\Brands;
use App\Entities\motonet\Categories;
use App\Entities\motonet\Items;
use App\Entities\motonet\Models;
use App\Entities\motonet\Operations;
use App\Entities\motonet\Publications;
use App\Entities\motonet\Visits;
use App\Http\Repositories\motonet\ModelsRepo as Repo;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use Illuminate\Support\Facades\Mail;
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

        //genera visitas
        $token = Visits::where('token',Session::get('_token'))->get();

        if($token->count() == 0){

            $nuevaVisita =  new Visits();
            $nuevaVisita->token = Session::get('_token');
            $nuevaVisita->save();

        }

            if(Session::get('carrito')){
                $prod = $this->publications->find(Session::get('carrito'));
                $precio = $prod->price;

                $this->data['carrito'] = [];
                $this->data['carrito']['precio'] = $precio;
                $this->data['carrito']['totalProductos'] = count(Session::get('carrito'));

            }


    }


    public function sendMail(Request $request){

        if($request->name == "")
            return redirect()->back()->withErrors("Completar Nombre");
        if($request->email == "")
            return redirect()->back()->withErrors("Completar Email");
        if($request->telefono == "")
            return redirect()->back()->withErrors("Completar Telefono");
        if($request->comentario == "")
            return redirect()->back()->withErrors("Completar Comentario");

        $data['from'] = $request->email;
        $data['nombre'] = $request->name;
        $data['telefono'] = $request->telefono;
        $data['comentario'] = $request->comentario;


        Mail::queue('emails.contact', $data , function($message) use($data)
        {
            $message->from($data['from']);
            $message->to('info@motonet.com.ar')->subject('Desde MotoNet.com.ar')
                ->replyTo($data['from'], $data['nombre']);
        });

        return redirect()->back()->withErrors("Mensaje enviado correctamente!.");

    }

    public function resumenNueva($id){

        $publicacion    = $this->publications->find($id);

        $this->data['publication'] = $publicacion;

        if($publicacion->private == 1)
        {
            $creado = new \DateTime($publicacion->publication_date);
            $hoy    = new \DateTime(date("Y-m-d"));

            if(date_diff($hoy,$creado)->days >= 2){

//                $this->data['publication'] = Publications::where('destacado',1)->where('private','!=',1)->get();

//                return redirect()->back()->withErrors('La publicación ha caducado')->with($this->data);
                $this->data["privateFail"] = 1;
                return view('motonet/web/new/checkout')->withErrors("La publicación ha caducado")->with($this->data);
            }

        }


        return view('motonet/web/new/checkout')->with($this->data);
    }


    public function checkout(){

        return view('motonet/web/new/checkout')->with($this->data);
    }

    public function cartList(){

        if(Session::has('carrito')){
            $this->data['cartList'] = Session::get('carrito');
            return view('motonet/web/new/cartList')->with($this->data);
        }else{
            return redirect()->back()->withErrors('No tiene productos para comprar.');
        }

    }

    public function searchNueva(){

        $this->data['productos'] = Publications::all();

        return view('motonet/web/new/search')->with($this->data);
    }

    public function indexNuevo(){

        $this->data['publications'] = Publications::where('destacado',1)->where('private','!=',1)->get();
        $this->data['brands']       = Brands::all();
        $this->data['branches']     = Branches::all();


        return view('motonet/web/new/index')->with($this->data);
    }

    public function index(){

        $this->data['publications'] = Publications::where('destacado',1)->where('private','!=',1)->get();

        return view('motonet/web/index')->with($this->data);
    }

    public function detail($id){
        $this->data['publicationDetail'] = $this->publications->find($id);

        return view('motonet/web/new/detail')->with($this->data);
    }

    public function find(Request $request)
    {
        if ($request->get('categories')) {
            $cat = $this->categories->find($request->get('categories'))->id;

            $this->data['productos'] = $this->publications
                                ->where('private','!=',1)
                                ->whereHas('models', function ($q) use($cat){
                                    $q->whereHas('categories', function ($q) use ($cat){
                                        $q->where('categories.id',$cat);
                                    });
                                })

                ->get();
            $this->data['grid'] = $this->categories->find($request->get('categories'))->name;

        } elseif ($request->get('models')){
            $m = $this->models->find($request->get('models'))->id;
            /*$this->data['items'] = $this->publications
                                ->whereHas('items',function($q) use($m) {
                                $q->whereHas('models', function ($q) use ($m) {
                                    $q->where('id', $m);
                                });
                            })->get();
            */
            $this->data['productos'] = $this->publications->where('models_id',$m)
                ->where('private','!=',1)
                ->get();

            $this->data['grid'] = $this->models->find($request->get('models'))->name;

        }elseif($request->get('brands')){
            $b = $this->brands->find($request->get('brands'))->id;
            $this->data['productos'] = $this->publications
                                ->where('private','!=',1)
                                ->whereHas('models',function($q) use($b) {
                                    $q->whereHas('brands', function ($q) use ($b) {
                                        $q->where('id', $b);
                                    });
                                })
                ->get();
            $this->data['grid'] = $this->brands->find($request->get('brands'))->name;
        }else{

            $find = $request->get('find');
            $this->data['productos'] = $this->publications
                                 ->where('private','!=',1)
                                 ->where('title','like','%'.$find.'%')
                                ->orWhereHas('models',function($q) use($find){
                                    $q->whereHas('categories',function($q) use($find) {
                                        $q->where('name', 'like', '%' . $find . '%');
                                    });
                                })
                                ->get();

            $this->data['grid'] = "find";
            $this->data['find'] = $request->get('find');
        }

        return view('motonet/web/new/search')->with($this->data);
    }

    public function resumen($id){

        $publicacion    = $this->publications->find($id);

        $this->data['publication'] = $publicacion;

        if($publicacion->private == 1)
        {
            $creado = new \DateTime($publicacion->publication_date);
            $hoy    = new \DateTime(date("Y-m-d"));

            if(date_diff($hoy,$creado)->days >= 2){

//                $this->data['publication'] = Publications::where('destacado',1)->where('private','!=',1)->get();

//                return redirect()->back()->withErrors('La publicación ha caducado')->with($this->data);
                $this->data["privateFail"] = 1;
               // return view('motonet/web/resumen')->withErrors("La publicación ha caducado")->with($this->data);
                return view('motonet/web/new/checkout')->withErrors("La publicación ha caducado")->with($this->data);

            }

        }


        return view('motonet/web/new/checkout')->with($this->data);
    }

    public function sucursalDetail($id){
        $this->data['sucursal'] = $this->branches->find($id);

        return view('motonet/web/branchDetail')->with($this->data);
    }

    public function mail(){
        return view('emails.mail');
    }


    public function contact(){
        return view('motonet/web/new/contact')->with($this->data);
    }


    public function addToCart($id){
//        if(Session::get('carrito')){
//            $array = Session::get('carrito');
//
//            if(in_array($id,$array)){
//                return redirect()->back()->withErrors('El producto seleccionado ya estaba agregado');
//            }else{
//                $array[] = $id;
//                Session::put('carrito',$array);
//                return redirect()->back()->withErrors('Se agregó correctamente el producto');
//            }
//
//        }else{
//            Session::put('carrito',array($id));
//            return redirect()->back()->withErrors('Se agregó correctamente el producto');
//        }

        if(Session::get('carrito')){
            if($id == Session::get('carrito')){
                return redirect()->back()->withErrors('El producto seleccionado ya estaba agregado');
            }else{
                if($this->publications->find($id)){
                    Session::put('carrito',$id);
                    return redirect()->route('resumenNueva',$id)->withErrors('Se agregó correctamente el producto');
                }else{
                    return redirect()->back()->withErrors('Ese producto no existe');
                }
            }
        }else if($this->publications->find($id)){
            Session::put('carrito',$id);
            return redirect()->route('resumenNueva',$id)->withErrors('Se agregó correctamente el producto');
        }else{
            return redirect()->back()->withErrors('Ese producto no existe');
        }

    }

    public function deleteFromCart($id){
        if(Session::get('carrito')){
            if($id == Session::get('carrito')){
                Session::forget('carrito');
                return redirect()->back()->withErrors('Se quitó correctamente el producto');
            }else{
                return redirect()->back()->withErrors('Ese producto no estaba en tu lista');
            }
        }else{
            return redirect()->back()->withErrors('No hay productos en tu lista');
        }

//        if(!empty(array_keys(Session::get('carrito'),$id))){
//            $pos = array_keys(Session::get('carrito'),$id);
//
//            $array = Session::get('carrito');
//
//            unset($array[$pos[0]]);
//
//            Session::put('carrito',$array);
//            return redirect()->back()->withErrors('Se eliminó correctamente el producto');
//        }else{
//            return redirect()->back()->withErrors('El producto no estaba en el carrito');
//        }


    }
}