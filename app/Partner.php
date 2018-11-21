<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    protected $fillable = ['businedd_desc'];
    use SoftDeletes;
    public function address(){
        return $this->hasOne('App\Address','id','address_id');
    }

    public function offered_services(){
        return $this->hasMany('App\PartnerServices','partner_id');
    }
}
