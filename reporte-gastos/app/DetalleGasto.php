<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleGasto extends Model
{
    public function gasto() {
       return $this->belongsTo(Gasto::class);
    }
}
