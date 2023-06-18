<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLevel2 extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];
    public function categorylevel1()
    {
        return $this->belongsTo(CategoryLevel1::class);
    }
    
    public function categoryLevel3s()
    {
        return $this->hasMany(CategoryLevel3::class);
    }
}
