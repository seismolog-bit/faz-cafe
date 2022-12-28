<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_billiard',
        'floor'
    ];

    public function order()
    {
        return $this->hasMany(Order::class, 'table_id');
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'table_id');
    }
}
