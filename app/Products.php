<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
 protected  $table='products';
    protected $guarded =[];
    protected $primaryKey = "Id";


    public function category()
    {
        return $this->belongsTo('App\Categories','cat_id');
    }
    public function Order_detail()
    {
        return $this->hasOne('App\Oderdetail','ProductId');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\SubCategory','SubCategoryId');

    }
public  function pro_detail(){
    return $this->hasMany('App\Product_detail','product_id','Id');
}
    public function color()
    {
        return $this->belongsTo('App\product_colors','id_color','id');
    }

    public function size(){
        return $this->hasMany('App\product_sizes','product_id','Id');

    }

}
