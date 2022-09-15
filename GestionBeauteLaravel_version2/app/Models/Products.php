<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
    'product_image',
    'product_name',
    'product_description',
    'product_price',
    'categorie_id',
    'vue',
    'user_id',
   ];
}
