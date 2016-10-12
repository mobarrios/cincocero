<?php

namespace App\Helpers;


use App\Helpers\pdfToText\Pdf as pdfTt;

class PdfToTextHelper{

    private $pdf ;

    public function __construct(pdfTt $pdf){

        $this->pdf = $pdf;
    }

    public function getIndex(){

        return $this->pdf;
    }





}




