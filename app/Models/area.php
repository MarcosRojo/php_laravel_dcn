<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    protected $table = 'areas';

    protected $fillable = [
        'descripcion',
        'status',
    ];
}
