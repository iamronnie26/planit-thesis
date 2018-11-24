<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;
    public function city(){
        return $this->hasOne('App\City','id','city_id');
    }

    public function province(){
        return $this->hasOne('App\Province','id','province_id');
    }

    public function region(){
        return $this->hasOne('App\Region','id','region_id');
    }
}
