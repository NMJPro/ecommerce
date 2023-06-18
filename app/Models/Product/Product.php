<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','description', 'quantity', 'price', 'remise', 'sku','garanty', 'specificity', 'category_level3_id'];

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable')->latest();
    }

    public function categorylevel3()
    {
        return $this->belongsTo(CategoryLevel3::class);
    }

    public function productgalleries()
    {
        return $this->hasMany(ProductGallery::class);
    }
}
