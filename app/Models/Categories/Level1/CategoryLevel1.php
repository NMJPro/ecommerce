<?php

namespace App\Models\Categories\Level1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLevel1 extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];
}
