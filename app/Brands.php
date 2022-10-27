<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 'brands';

    public function get_product()
    {
        return $this->hasMany('App\Products', 'Product_brandid', 'id');
    }

    public function bill()
    {
        return $this->belongsTo('App\khachang', 'id_customer', 'id');
    }

    public function khachhang()
    {
        return $this->belongsTo('App\khachhang', 'customer_id', 'id');
    }
}
