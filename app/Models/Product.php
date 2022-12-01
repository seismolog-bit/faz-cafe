<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'image',
        'detail',
        'price',
        'discount',
        'duration',
        'archive'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class, 'product_id');
    }
}
