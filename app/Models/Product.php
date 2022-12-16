<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'category_id',
        'price',
        'item_id',
        'duration',
        'detail',
        'archive',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class, 'product_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
