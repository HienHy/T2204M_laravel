<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'thumbnail',
        'price',
        'qty',
        'description',
        'unit',
        'status',
        'category_id'

    ];
    use HasFactory;
}
