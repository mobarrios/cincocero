<?php

namespace App\Helpers;


class RandomHelper
{
    function RandomText($length, $pattern = "1234567890abcdefghijklmnopqrstuvwxyz")
    {
        $key = "";


        $pattern = str_replace(' ', '-', $pattern);

        $pattern =  preg_replace('/[^A-Za-z0-9\-]/', '', $pattern);


        for($i=0;$i<$length;$i++)
        {
            $key .= $pattern{rand(0,strlen($pattern)-1)};
        }

        return $key;
    }

}