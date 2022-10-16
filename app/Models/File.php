<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file',
        'extention',
        'size',
        'description',
        'product_id'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
