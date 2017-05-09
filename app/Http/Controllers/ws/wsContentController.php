<?php

namespace App\Http\Controllers\ws;


//use App\Http\Repositories\UserRepo;
//use App\Http\Requests\UserCreateRequest;
//use App\Http\Helpers\Helper;
use App\Entities\AdminUsers;
use App\Entities\stock\Items;
use App\Entities\User;
use App\Http\Controllers\Controller;
use App\Http\Repositories\motonet\PublicationsRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;


class wsContentController extends Controller
{

    public function __construct()
    {
        // $this->middleware('cors');
        //  $this->middleware('changeDbWS');
    }

    public function getWs(Request $request)
    {
        $it = Items::lists('code', 'description');

        return response()->json($it);

    }

    public function publications(PublicationsRepo $publicationsRepo)
    {
        $data = [];


        $publications = $publicationsRepo->getModel()
            ->where('private', 0)
            ->get();


        foreach ($publications as $publication) {

           // foreach ($publication->Models->Categories as $category)
           // {
           //     $cat[]=['name' => $category->name];
           // }

            $data[] = [
                'title' => $publication->title,
                'description' => $publication->description,
                'price' => $publication->price,
                'img' => $publication->Images->first() ? $publication->Images->first()->image : null,
                'brands' => [
                    'name' => $publication->Models->Brands->name,
                    'img' => $publication->Models->Brands->Images->first() ? $publication->Models->Brands->Images->first()->image : null
                ],
                'models' => [
                    'name' => $publication->Models->name,
                    'img' => $publication->Models->Images->first() ? $publication->Models->Images->first()->image : null
                ],
                'categories' => $publication->Models->Categories->first() ? $publication->Models->Categories->first()->name : null,
                'destacado' => $publication->destacado,
                'destacado_text' => $publication->destacado_text,
                'promo' => $publication->promo
            ];

        };

        return response()->json($data);

    }


    /*
    public function index()
    {
        $it =  Items::all();

        $items = [];

        foreach($it as $its)
        {
            $items = [
                'name'=>$its->name,
                'code'=>$its->code
            ];
        }
        return response()->json($items);
    }
*/
}