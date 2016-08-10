<?php

namespace App\Http\Repositories\tfc;

use App\Entities\tfc\Fases;
use App\Http\Repositories\BaseRepo;

use App\Helpers\FixtureHelper;

class FasesRepo extends BaseRepo {

    public function getModel()
    {
        return new Fases();
    }

    public function createCustom($datos = null)
    {
        $data = $datos->all();

        return;
    }


    public function Rules()
    {
        return [
            'name'   => 'required',
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Serie' =>  ['data' => 'name','relation' => null],


                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }


    /**
     * @return mixed
     */
    public function buildFixture()
    {

        $equipos    =
            array('Boca',
            'River',
            'Independiente',
            'Racing','Newells','Colon');

        $fix  = new FixtureHelper($equipos);

        $fix->setAleatorio(false);
        $fix->tablaDeCruces();
        $fix->setFechaLibre('Libre');

        echo($fix->verCuadro());

    }

    public function start(){

        $start = ['64'=>'64','32'=>'32','16'=>'16','8'=>'8','4'=>'4','2'=>'Semifinal','3'=>'Tercer P.','1'=>'Final'];

        return $start;
    }



}