<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=["product_name","description","price","is_available","category_id","product_image","special_price"];
    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
    public function Carts()
    {
        return $this->hasMany('App\Cart');
    }

}
