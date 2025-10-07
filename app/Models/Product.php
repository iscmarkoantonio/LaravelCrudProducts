<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image_url',
    ];

    // Relación muchos a muchos
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_products');
    }
}
