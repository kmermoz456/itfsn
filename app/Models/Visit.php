<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = ['ip','user_agent','url','visited_at'];

    protected $casts = [
        'visited_at' => 'datetime',
    ];
}
