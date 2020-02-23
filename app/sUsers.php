<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sUsers extends Model
{
    //
    protected $table = 's_users';
    protected $primaryKey = 'sUsers_id';
    protected $fillable =[
        'sUsers_id',
        'sUsers_name',
        'sUsers_email',
        'sUsers_contact',
        'sUsers_address',
    ];

    public function getHostel(){
        return $this->hasOne('App\Hostel_informationModel','hostel_id');
    }
}
