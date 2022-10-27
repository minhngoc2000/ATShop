<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = "subcategory";
    public function get_category(){
        return $this->belongsTo('App\Categories','CategoryId','Id');
    }
    public function products(){
        return $this->hasMany('App\Products','SubCategoryId','Id');
    }
}
