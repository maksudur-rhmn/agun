<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'product_name',
      'product_price',
      'product_category'
    ];


    function relationBetweenCategory()
    {
      return $this->hasOne('App\ProductCategory', 'id', 'product_category');
    }
}
