<?php

namespace App\Http\Controllers\ws;


use App\Helpers\Meli;
use App\Http\Controllers\Controller;
use App\Entities\MercadoLibreCategories;


class MercadolibreController extends Controller {

    protected $app_id;
    protected $secret;
    protected $token;
    protected $user_id;
    protected $meli;

    public function __construct()
    {
        $this->app_id     = '8021675389195203';
        $this->secret     = 'YpEAyCWuSIYOREv3NP3cgYh4t72F3WwV';
        $this->token      = 'APP_USR-8021675389195203-032108-b0631cfb8175478b7089bccc3e6f6812__M_F__-80998981';
        $this->user_id    = '80998981';

        $this->meli = new Meli($this->app_id,$this->secret);
    }


    /**
     *
     */
    public function getItem($item_id = null)
    {
        $item = $this->meli->get('/items/'.$item_id);
        $item = $item['body'];

        dd($item);
        return;
    }

    public function itemsList()
    {
        $list = $this->meli->get('/users/'.$this->user_id.'/items/search',['access_token'=> $this->token]);

        foreach ($list['body'] as $key => $value){

            echo $value;
        }

        return;
    }

    public function getCategories()
    {
        $categories = $this->meli->get('/sites/MLA/categories');

        return $categories;
    }

    public function getSubCategories($categories_id = null)
    {
        $categories = $this->meli->get('/categories/'.$categories_id);

        return response()->json($categories['body']);
    }

    public function updateCategories()
    {
        $categories = $this->getCategories();

        foreach ($categories['body'] as $category => $k) {

            $ml             = new MercadoLibreCategories();
            $ml->ml_id      = $k->id;
            $ml->name       = $k->name;
            $ml->save();
        }
        return 'ok';
    }

    public function updateSubCategories(){

        $ml_cat = MercadoLibreCategories::all();

        foreach($ml_cat  as $sc){

            $sub = $this->getSubCategories($sc->ml_id);

            if(isset($sub->children_categories)){
                foreach($sub->children_categories as $s)
                {
                    $ml             = new MercadoLibreCategories();
                    $ml->ml_id      = $s->id;
                    $ml->name       = $s->name;
                    $ml->ml_main    = $sc->ml_id;
                    $ml->save();
                }
            }


        }

        return 'ok';
    }

}