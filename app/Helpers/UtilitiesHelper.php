<?php

namespace App\Helpers;



use Maatwebsite\Excel\Excel;

class UtilitiesHelper{

    private $excel ;

    public function __construct(Excel $excel){

        $this->excel = $excel;
    }


    public function exportToXls($model = null){


             $this->excel->create('Exportacion', function($ex) use ($model) {

                $ex->sheet('Excel sheet', function($sheet) use ($model) {

                    $sheet->fromArray($model)->setOrientation('landscape');

                });

            })->export('xls');

    }


}




