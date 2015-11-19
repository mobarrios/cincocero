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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;



class InitController extends Controller {


    public function __construct()
    {
        if(Auth::check())
            Config::set('database.connections.mysql.database', Auth::user()->db);
    }

    public function getInit()
    {
        $this->schemaCreate(Config('initDb'));
        $this->getInitData();
    }

    public function getUpdate()
    {
        $this->schemaCreate(Config('ahgai.ahgaiDb'));

    }


    public function getInitData()
    {
        $profile = new Profile();
        $profile->id    = 1;
        $profile->profile = 'admin';
        $profile->save();
    }

    public function schemaCreate($db = null)
    {
        foreach ($db as $val => $k) {

            //valida si esta creada la tabla
            if (!Schema::hasTable($val)) {
                //crea la tabla
                Schema::create($val, function ($table) use ($k, $val) {

                    //crea los timesstapms e ids
                    $table->increments('id');
                    $table->timestamps();
                    $table->softDeletes();

                    //recorre las columnas y las crea solo si no se encuentran
                    foreach ($k as $m => $a) {

                        if (!Schema::hasColumn($val, $m)) {

                            if ($m != 'relations') {

                                $table->$a[0]($m , $a[1])->nullable();

                            } else {

                                foreach($a as $rel => $rel_data)
                                {
                                    // si es REL , relacion , crea el campo y luego la foreign key
                                    $table->integer($rel)->unsigned();
                                    $table->foreign($rel)->references($rel_data[1])->on($rel_data[0]);
                                }


                            }
                        }


                    }
                });

            }else{
                // si la tabla esta creada chequea cada dato si existe o no
                Schema::table($val, function($table) use($k, $val)
                {
                    //recorre las columnas y las crea solo si no se encuentran
                    foreach ($k as $m => $a) {



                        if (!Schema::hasColumn($val, $m) )
                        {
                            echo Schema::hasColumn($val, $m);
                            if ($m != 'relations')
                            {
                                $table->$a[0]($m , $a[1])->nullable();

                            } else {

                                    foreach($a as $rel => $rel_data)
                                    {
                                        if (!Schema::hasColumn($val, $rel) ) {

                                            // si es REL , relacion , crea el campo y luego la foreign key
                                            $table->integer($rel)->unsigned();
                                            $table->foreign($rel)->references($rel_data[1])->on($rel_data[0]);
                                        }
                                    }
                                }

                        }


                    }
                    return;
                });

            }

        }

    }

}