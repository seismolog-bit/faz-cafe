<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'unit',
        'price',
        'stock',
    ];

    public function receiving_item()
    {
        return $this->hasMany(ReceivingItem::class, 'item_id');
    }

    public function putaway_item()
    {
        return $this->hasMany(PutawayItem::class, 'item_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'item_id');
    }
}
