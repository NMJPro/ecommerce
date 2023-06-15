<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLevel3 extends Model
{
    use HasFactory;

  
    protected $fillable = ['title', 'description'];
  
    public function categorylevel2()
    {
        return $this->belongsTo(CategoryLevel2::class);
    }

    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
  
}
