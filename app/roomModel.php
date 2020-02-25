<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomModel extends Model
{
    //
    public function students(){
        return $this->hasMany('App\students', 'stu_id');
    }
}
