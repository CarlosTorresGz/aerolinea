<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VuelosAsiento extends Model
{
    use HasFactory;
    protected $table = 'vuelos_asientos';
    public $timestamps = false;
}
