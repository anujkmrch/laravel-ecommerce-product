<?php

namespace Kch\ECommerce\Model;

use Illuminate\Database\Eloquent\Model;

class Characterstic extends Model
{
    public function Variants(){
    	return $this->belongsTomany('\Kch\ECommerce\Model\Variant','characterstic_variant','characterstic_id','variant_id')->withPivot('product_id');
    }
    public function Products(){
    	return $this->belongsTomany('\Kch\ECommerce\Model\Product','product_characterstic','characterstic_id','product_id');
    }
}
