<?php

namespace Kch\ECommerce\Model;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    public function CharacterStics(){
    	return $this->belongsTomany('\Kch\ECommerce\Model\Characterstic','characterstic_variant','variant_id','characterstic_id');
    }
}
