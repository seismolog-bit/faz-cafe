<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiving extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'note',
        'image',
        'place'
    ];

    public function receiving_items()
    {
        return $this->hasMany(ReceivingItem::class, 'receiving_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
