<?php

namespace App\Http\Controllers\ws;


//use App\Http\Repositories\UserRepo;
//use App\Http\Requests\UserCreateRequest;
//use App\Http\Helpers\Helper;
use App\Entities\AdminUsers;
use App\Entities\motonet\Clients;
use App\Entities\stock\Items;
use App\Entities\User;
use App\Http\Controllers\Controller;
use App\Http\Repositories\motonet\ClientsRepo;
use App\Http\Repositories\motonet\PublicationsRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;


class wsContentController extends Controller
{

    public function __construct()
    {
        $this->middleware('cors');
        //  $this->middleware('changeDbWS');
    }

    public function getWs(Request $request)
    {
        $it = Items::lists('code', 'description');

        return response()->json($it);

    }

    public function publications(PublicationsRepo $publicationsRepo)
    {
        $data = collect();

        $publications = $publicationsRepo->getModel()
            ->where('private', 0)
            ->get();


        foreach ($publications as $publication) {

            foreach ($publication->Models->Categories as $category) {
                $cat = collect();
                $cat->push(['name' => $category->name]);
            }

            $data->push([
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
                'categories' => $cat,
                'destacado' => $publication->destacado,
                'destacado_text' => $publication->destacado_text,
                'promo' => $publication->promo
            ]);

        };

        return response()->json($data);

    }


    // sorteo
    public function postRegister(Request $request, ClientsRepo $clientsRepo)
    {

        // valida si el cliente ya esta en la db
        $client = $clientsRepo->getModel()->where('dni', $request->dni)->first();


        if (is_null($client)) {

            $client = $clientsRepo->create($request);

            $this->sendMail($client);

            return response()->json($client, 200);

        } else {

            if ($client->sorteo == 1)
            {
                return response()->json($client, 400);

            } else {

                $client->sorteo = 1;
                $client->save();

                $this->sendMail($client);

                return response()->json($client, 200);
            }
        }
    }

    public function sendMail($client)
    {
        $data = [
            'id' => $client->id,
            'name' => $client->name,
            'last_name' => $client->last_name,
            'dni' => $client->dni,
        ];


        \Illuminate\Support\Facades\Mail::send('emails.sorteo', $data, function ($message) use ($client)
        {
            $message->from('info@motonet.com.ar');
            $message->to($client->email)->subject('Inscripción al Sorteo. #sanmiguelmanejaseguro');
        });

    }

}