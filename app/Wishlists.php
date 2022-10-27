<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlists extends Model
{
    protected  $table='wishlists';

    public function products(){
        return $this->belongsTo('App\Products','product_id','id');
    }
}
