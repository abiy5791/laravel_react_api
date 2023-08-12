<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $fillable = [
        'sub_food_name',
        'sub_food_description',
        'sub_food_price',
    ];
}