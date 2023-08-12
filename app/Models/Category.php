<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
    protected $fillable = [
        'cat_food_name',
        'cat_food_description',
        'cat_food_image',
    ];
}