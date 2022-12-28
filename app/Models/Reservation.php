<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_id',
        'user_id',
        'buyer',
        'down_payment',
        'reservation_date',
        'start_time',
        'end_time',
        'note'
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
