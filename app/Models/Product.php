<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\File;
use App\Models\Sub_category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'item_id',
        'title',
        'category_id',
        'sub_category_id',
        'negotiable',
        'price',
        'condition',
        'description',
        'min_quantity',
        'validity',
        'is_primary',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function file()
    {
        return $this->belongsto(File::class);
    }

    public function sub_category()
    {
        return $this->hasMany(Sub_category::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
