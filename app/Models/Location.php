<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Item;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'deleted_at',
        'country',
        'address_1',
        'address_2',
        'city',
        'state',
        'zone',
        'zip_code',
        'lat',
        'lng',
        'type',
        'added_by'
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->hasOne(Item::class);
    }
}
