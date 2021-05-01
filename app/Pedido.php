<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function transacciones(){
        return $this->belongsToMany(Transaccion::class);
    }

}
