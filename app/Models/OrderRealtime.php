<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderRealtime extends Model
{
    use HasFactory;

    protected $fillable = [
        'table',
        'start_time',
        'end_time'
    ];
}
