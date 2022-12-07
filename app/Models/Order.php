<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'invoice',
        'is_billiard',
        'buyer',
        'payment_method',
        'payment_status',
        'table_id',
        'card_id',
        'price',
        'tax',
        'shipping',
        'grand_total',
        'order_status',
        'start_time',
        'end_time'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }
}
