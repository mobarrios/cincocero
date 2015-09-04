<?php
namespace App\Entities\ahgai;

use \App\Entities\Entity;

class Noticias extends Entity{

    protected $table = 'noticias';

    protected $fillable = ['fecha_publicacion','encabezado','descripcion'];


}