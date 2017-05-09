<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:36
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class Entity extends Model {


    public function __construct()
    {
        if(Auth::check())
        {
            DB::setDefaultConnection('mysql');

            Config::set('database.connections.mysql.database', Auth::user()->db);

        }
    }

    public static function getClass()
    {
        return get_class(new static);
    }


    public function getImagesAttribute()
    {
        $id      = $this->attributes['id'];
        $entity  = $this->getTable();

        $image   = Images::where('entity',$entity)->where('entity_id',$id)->get();

        if(!is_null($image)){
            return $image;
        }

    }


    public function img()
    {
        $this->attributes['img'] = $this->getImagesAttribute();
    }

    public function getImgAttribute(){
        return $this->attributes['img'];
    }

    public function cleanChars($string){
        $pattern1 = '/[ \']/';
        $replacement1 = '-';

        $pattern2 = '/[�]/';
        $replacement2 = 'n';

        $pattern3 = '/[�]/';
        $replacement3 = 'a';

        $pattern4 = '/[�]/';
        $replacement4 = 'e';

        $pattern5 = '/[�]/';
        $replacement5 = 'i';

        $pattern6 = '/[�]/';
        $replacement6 = 'o';

        $pattern7 = '/[�]/';
        $replacement7 = 'u';

        $pattern8 = '/[�]/';
        $replacement8 = 'u';

        $newString = preg_replace($pattern1, $replacement1, $string, -1 );
        $newString = preg_replace($pattern2, $replacement2, $newString, -1 );
        $newString = preg_replace($pattern3, $replacement3, $newString, -1 );
        $newString = preg_replace($pattern4, $replacement4, $newString, -1 );
        $newString = preg_replace($pattern5, $replacement5, $newString, -1 );
        $newString = preg_replace($pattern6, $replacement6, $newString, -1 );
        $newString = preg_replace($pattern7, $replacement7, $newString, -1 );
        $newString = preg_replace($pattern8, $replacement8, $newString, -1 );

        return $newString;
    }


}