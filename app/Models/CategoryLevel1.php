<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLevel1 extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];
    public function CategoryLevel2s()
    {
        return $this->hasMany(CategoryLevel2::class);
    }
}
