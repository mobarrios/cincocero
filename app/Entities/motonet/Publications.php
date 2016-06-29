<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publications extends Entity{
    use SoftDeletes;

    protected $table = 'publications';

    protected $fillable = ['publication_date','title','price','models_id','description','destacado','salable','destacado_text','private'];

    protected $dates = ['deleted_at'];

    public function getPublicationDateAttribute($value)
    {

        if($value != null)
            return date('d-m-Y',strtotime($value));

    }

    public function setPublicationDateAttribute($value)
    {
        $this->attributes['publication_date'] = date('Y-m-d',strtotime($value));
    }

    public function Items()
    {
        return $this->belongsTo(Items::getClass());
    }

    public function Models()
    {
        return $this->belongsTo(Models::getClass());
    }


    public function PayMethod()
    {
        return $this->belongsToMany(PayMethod::getClass(),'publications_pay_method')->orderBy('method','ASC');

    }

    public function Operations()
    {
        return $this->hasMany(Operations::getClass());
    }



}