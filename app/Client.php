<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;
    public function postedJobs(){
        return $this->hasMany('App\Job','job_author','id');
    }
}
