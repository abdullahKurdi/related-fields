<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $guarded=[];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

}
