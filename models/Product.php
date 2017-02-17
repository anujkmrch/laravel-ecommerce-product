<?php

namespace Kch\ECommerce\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','shop_id'];

    public function CharacterStics(){
    	return $this->belongsTomany('\Kch\ECommerce\Model\Characterstic','product_characterstic','product_id','characterstic_id');
    }

    public function Skus(){
    	return $this->hasMany('\Kch\ECommerce\Model\Sku');
    }

   	public function Current(){
        return $this->hasOne('\Kch\ECommerce\Model\Sku','product_id');
    }

    public function orders(){
        
    }
}
