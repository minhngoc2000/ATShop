<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected  $table='order_detail';
    public  function product_order(){
        return $this->belongsToMany('App\Products','ProductId','Id');
    }
}
