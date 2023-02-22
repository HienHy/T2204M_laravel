<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
    use SoftDeletes;


    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Orders(){
        return $this->belongsToMany(Order::class,"order_product");
    }


    public function scopeSearch($query,$search){
        if ($search && $search !=""){

            return $query -> where("name","like","%$search%");
        }
        return  $query;

    }


    public function scopeCategoryFiler($query,$category_id){
        if ($category_id && $category_id !=0){
            return $query->where("category_id",$category_id);

        }
        return $query;
    }

    public function scopeLowestPrice($query,$lowest_price){

        if ($lowest_price && $lowest_price !=0){
            return $query->where("price",">=",$lowest_price);
        }
        return $query;
    }
    public function scopeHighestPrice($query,$highest_price){

        if ($highest_price && $highest_price !=0){
            return $query->where("price","<=",$highest_price);
        }
        return $query;
    }






}
