<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'status'
    ];

    public function order()
    {
        return $this->hasMany(Order::class, 'card_id');
    }

    public function order_active()
    {
        return $this->hasOne(Order::class)->latestOfMany();
    }
}
