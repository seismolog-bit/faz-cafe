<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PutawayItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'putaway_id',
        'product_id',
        'qty'
    ];
}
