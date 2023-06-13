<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLevel3 extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];
    public function CategoryLevel2()
    {
        return $this->belongsTo(CategoryLevel2::class);
    }
}
