<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $fillable = ['name','description', 'quantity', 'price', 'remise', 'sku','garanty', 'specificity'];
    
 
    



    public function categorylevel3()
    {
        return $this->belongsTo(CategoryLevel3::class);
    }

    public function productgalleries()
    {
        return $this->hasMany(ProductGallery::class);
    }
}
