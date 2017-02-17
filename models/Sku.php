<?php

namespace Kch\ECommerce\Model;

use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    protected $fillable = ['product_id','title','slug','price','options'];
    public function Product(){
    	return $this->belongsTo('\Kch\ECommerce\Model\Product');
    }
    public function SkuImages(){
    	return $this->hasMany('\Kch\ECommerce\Model\SkuImage','sku_id');
    }

    public function VariantOptions()
    {
    	 return $this->belongsToMany('\Kch\ECommerce\Model\VariantOption');
    }
}
