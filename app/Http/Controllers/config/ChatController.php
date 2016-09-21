<?php

namespace App\Http\Controllers\config;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ChatController extends Controller {


    public function chat()
    {
        return view('controls.chat');
    }


}