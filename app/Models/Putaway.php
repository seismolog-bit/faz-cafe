<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Putaway extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'note'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function putaway_items()
    {
        return $this->hasMany(PutawayItem::class, 'putaway_id');
    }
}
