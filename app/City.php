<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    public $guarded=[];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function districts(){
        return $this->hasMany(District::class);
    }
}
