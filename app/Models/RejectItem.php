<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'reject_id',
        'product_id',
        'qty'
    ];
}
