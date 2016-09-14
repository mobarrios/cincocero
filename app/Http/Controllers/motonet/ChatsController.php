<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Chats;
use App\Entities\motonet\ChatsMessages;
use App\Http\Repositories\motonet\ChatsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Auth;


class ChatsController extends Controller {

    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;

    public function __construct(Repo $repo)
    {
        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'motonet.chats.index';
        $this->form                 = 'motonet.brands.form';
        $this->data['sectionName']  = 'Chats';

        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/chats/images/';
        $this->data['entityImg']        = 'chats';


        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'chats';
        $this->data['routeEdit']    = 'chatsGetEdit';
        $this->data['routeDel']     = 'chatsGetDel';
        $this->data['routeNew']     = 'chatsGetNew';
        $this->data['routePostNew'] = 'chatsPostNew';
        $this->data['routePostEdit']= 'chatsPostEdit';
    }


    public function getIndex(){

        $this->data['chats'] = Chats::where('status',1)->get();

        return view('motonet.chats.index')->with($this->data);

    }

    public function newChat(Request $request ){

        $token  = $request->get('token');

        $chat   = Chats::where('token',$token)->get();

        if($chat->count() == 0) {

            $new            = new Chats();
            $new->token     = $token;
            $new->users_id  = Auth::user()->id;
            $new->status    = 1;
            $new->save();

            return response()->json(true);
        }
        
    }

    public function addMessageClient(Request $request){

        $token = $request->get('token');
        $msg   = $request->get('message');

        $chat                  = Chats::where('token', $token)->first();

        $newChat               = new ChatsMessages();
        $newChat->clients_msg  = $msg;
        $newChat->chats_id     = $chat->id;
        $newChat->save();
    }

    public function addMessageUser(Request $request){

        $token = $request->get('token');
        $msg   = $request->get('message');

        $chat                  = Chats::where('token', $token)->first();

        $newChat               = new ChatsMessages();
        $newChat->users_msg    = $msg;
        $newChat->chats_id     = $chat->id;
        $newChat->save();
    }

    public function endChat(Request $request){

        $token = $request->get('token');

        $chat           = Chats::where('token',$token)->first();
        $chat->status   = 2;
        $chat->save();
    }

    public function activeChats(){
        $chats = Chats::with('ChatsMessages')->where('status','1')->get();

        return response()->json($chats);
    }
}