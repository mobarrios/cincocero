<?php

namespace App\Http\Controllers\config;



use App\Entities\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Helpers\ImagesHelper;
use Illuminate\Http\Request;


class InitController extends Controller {

    public function getInit()
    {
        $db = Config('initDb');

        foreach ($db as $val => $k) {

            //valida si esta creada la tabla
            if (!Schema::hasTable($val)) {

                //crea la tabla
                Schema::create($val, function ($table) use ($k, $val) {

                    //crea los timesstapms e ids
                    $table->increments('id');
                    $table->timestamps();
                    $table->softDeletes();
                   // $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                    //$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
                    //$table->timestamp('created_at')->default(DB::raw('0000-00-00 00:00:00'))->nulleable();
                    //$table->timestamp('updated_at')->default(DB::raw('0000-00-00 00:00:00'))->nulleable();


                    //recorre las columnas y las crea solo si no se encuentran
                    foreach ($k as $m => $a) {

                        if (!Schema::hasColumn($val, $m)) {

                            if ($m != 'rel') {

                                $table->$a[0]($m , $a[1])->nullable();

                            } else {

                                // si es REL , relacion , crea el campo y luego la foreign key
                                $table->integer($a[0])->unsigned();
                                $table->foreign($a[0])->references($a[2])->on($a[1]);

                            }
                        }


                    }
                });
            }

        }

        $this->getInitData();
    }

    public function getInitData()
    {
        $profile = new Profile();
        $profile->id    = 1;
        $profile->profile = 'admin';
        $profile->save();
    }

}