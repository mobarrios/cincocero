<?php
namespace App\Entities\soffem;

use \App\Entities\Entity;

class DestacadosCategories extends Entity{

    protected $table = 'destacados_categories';

    protected $fillable = ['seasons_id','categories_id','players_id','teams_id','observations'];

    public function Players()
    {
        return $this->belongsTo(Players::getClass());
    }

    public function Teams()
    {
        return $this->belongsTo(Teams::getClass());
    }



}