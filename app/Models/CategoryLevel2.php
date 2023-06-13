<?php

namespace App\Models\Categories\Level2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLevel2 extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];
}
