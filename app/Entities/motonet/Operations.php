<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Operations extends Entity{

    protected $table = 'operations';

    protected $fillable = ['clients_id','authorization_code','medio_de_pago','pay_date','amount','authorization_key','publications_id','message'];


    public function getMedioPagoAttribute()
    {
        if($this->attributes['medio_de_pago'] == 1)
            return 'Todo Pago';

        if($this->attributes['medio_de_pago'] == 2)
            return 'Mercado Pago';

        if($this->attributes['medio_de_pago'] == 3)
            return 'Deposito';
    }



    public function Clients()
    {
        return $this->belongsTo(Clients::getClass());

    }

    public function getClienteAttribute()
    {
        return $this->Clients->full_name;
    }

    public function getStatusAttribute()
    {
        if($this->attributes['status'] == 0)
            return 'Nada';

        if($this->attributes['status'] == 1)
            return 'Acreditado';

        if($this->attributes['status'] == 2)
            return 'Pendiente de Acreditación';

    }


}