<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'start_time' => 'date:hh:mm',
        'end_time' => 'date:hh:mm'
    ];

    protected $fillable = [
        'user_id',
        'price',
        'tax',
        'shipping',
        'grand_total',
        'order_status',
        'start_time',
        'end_time'
    ];
}
