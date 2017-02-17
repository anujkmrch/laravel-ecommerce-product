<?php

namespace Kch\ECommerce\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id'];

    public function products(){
    	return $this->belongsToMany('\Kch\ECommerce\Model\Product','order_products','order_id','product_id')->withPivot('sku_id');
    }
    public function User(){
    	return $this->belongsTo('\Kch\ECommerce\Model\User');
    }
}
