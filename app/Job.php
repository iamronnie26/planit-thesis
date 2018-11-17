<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use SoftDeletes;
    protected $fillable = ["deadline"];

    public function job_author(){
        return $this->hasOne('App\User','id','job_author');
    }
}
