<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";
    protected $primaryKey = "Id";



    public function get_subcategory(){
        return $this->hasMany('App\SubCategory','CategoryId','Id');
    }
public  function  products(){
        return $this->hasManyThrough('App\Products','App\Subcategory','CategoryId','SubcategoryId');

}
}
