<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminModel extends Model
{
    //
    
    public function hostel()
    {
        return $this->belongsTo(Hostel_informationModel::class);
    }
    
}
