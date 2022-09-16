<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    public function detalleGastos() {
        return $this->hasMany(DetalleGasto::class);
    }
}
