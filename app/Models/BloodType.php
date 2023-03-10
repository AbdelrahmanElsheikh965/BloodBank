<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{

    protected $table = 'blood_types';
    public $timestamps = true;
    protected $fillable = array('name');

    public function clients()
    {
        return $this->hasMany('App\Models\Client');
    }

    public function clientsNotify()
    {
        return $this->belongsToMany('App\Models\Client');
    }

    public function donationRequest()
    {
        return $this->hasMany('App\Models\DonationRequest');
    }

    public static function getAll(){
        return BloodType::all();
    }

}
