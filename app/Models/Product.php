<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory, SoftDeletes;

    //protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'company_id',
        'category_id',
        'product_type',
        'name',
        'description',
        'price',
        'stock',
        'attributes',
    ];

    protected $casts = [
        'attributes' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function logs()
    {
        return $this->hasMany(ProductLog::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
