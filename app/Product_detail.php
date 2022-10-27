<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_detail extends Model
{
    protected  $table="product_detail";
    public function color()
    {
        return $this->hasOne('App\product_colors','pro_detail_id','id');
    }
    public function product()
    {
        return $this->belongsTo('App\Products','product_id','Id');
    }
}
