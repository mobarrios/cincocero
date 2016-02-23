<?php

namespace App\Helpers;


use Illuminate\Support\Facades\Session;

class BreadCrumbHelper
{

       public function index($section = null, $route = null)
       {
           Session::forget('bread');

           $data['bread']  =  [$section => $route];

           Session::push('bread', $data['bread']);

       }

        public function create($section = null, $route = null)
        {
            $data['bread']  =  [$section => $route];
            Session::push('bread',$data['bread']);

        }

        public function edit($section = null, $route = null)
        {
            $data['bread']  =  [$section => $route];

            Session::push('bread',$data['bread']);

        }
}