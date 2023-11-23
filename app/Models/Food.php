<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    // use HasFactory;

    protected $table = 'foods';
    protected $fillable = [
        'food_name',
        'food_brief_description',
        'food_full_description',
        'food_category',
        'food_price',
        'food_picture',
    ];
}
