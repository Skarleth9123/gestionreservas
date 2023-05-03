<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huespede extends Model
{
    use HasFactory;
    public function Habitacion(){
        return $this->belongsTo(Habitacion::class);
    }
}
