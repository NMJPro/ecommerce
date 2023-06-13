<?php

namespace App\Models\Categories\Level3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLevel3 extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];
}
