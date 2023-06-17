<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    use HasFactory;
    protected $fillable = ['name','path', 'rootpath', 'res','url',];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
