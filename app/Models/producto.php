<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'descripcion',
        'status',
        'modelo_id',
        'area_id',
    ];
}
