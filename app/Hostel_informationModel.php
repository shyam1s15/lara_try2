<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel_informationModel extends Model
{
    //
    protected $table = 'hostel_information_models';
    protected $primarykey = 'hostel_id';

    protected $fillable = [
        'hostel_id',
        'hostel_name',
        'hostel_address',
        'category',
        'description',
        'hostel_contact',
        'hostel_mail',
    ];

    public function admins()
    {
        return $this->hasMany(adminModel::class);
    }
}
