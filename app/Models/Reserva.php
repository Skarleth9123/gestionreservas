<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
   
    public function Habitaciones(){
        return $this->hasMany(Habitacione::class);
    }

}
