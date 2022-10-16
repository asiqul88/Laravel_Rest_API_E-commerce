<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\User;
use App\Models\Product;
use App\Models\File;


class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'item_type',
        'location_id',
        'tradable',
        'user_id',
        'status',
        'is_active'
    ];


    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }

}
