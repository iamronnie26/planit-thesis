<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerServices extends Model
{
    use SoftDeletes;

    public function service(){
        return $this->hasOne('App\Services','id','service_id');
    }
}
