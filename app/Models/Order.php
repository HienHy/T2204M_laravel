<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable =[
        'grand_total',
        'status',
        'shipping_address',
        'customer_tell'

        ];
    use HasFactory;
public function Products(){
    return $this ->belongsToMany(Product::class,
        "order_product")->withPivot("qty","price");
}

}
