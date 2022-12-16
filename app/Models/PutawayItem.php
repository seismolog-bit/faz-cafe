<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PutawayItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'putaway_id',
        'item_id',
        'qty'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function putaway()
    {
        return $this->belongsTo(Putaway::class);
    }
}
