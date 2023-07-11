<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'geo_id',
        'status',
        'price',
        'name',
        'picture',
    ];
}
