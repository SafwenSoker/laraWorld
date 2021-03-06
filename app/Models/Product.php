<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //protected $table = "products";
    //public $incremeting= false;
    //protected $primaryKey = "product_num";
    //public $timestamps = false;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function orderDetails() {
        return $this->belongsTo(OrderDetail::class);
    }


}
