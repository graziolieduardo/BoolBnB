<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model

{
    // fillable
    protected $fillable = ['name', 'user_id', 'description', 'num_rooms', 'num_beds', 'num_bathrooms', 'square_meters', 'city', 'address', 'lat', 'lon', 'image', 'visible'];

    // entity relation 
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function leads() {
        return $this->hasMany('App\Lead');
    }

    public function pictures() {
        return $this->hasMany('App\Picture');
    }

    public function clicks() {
        return $this->hasMany('App\Click');
    }

    public function services() {
        return $this->belongsToMany('App\Service');
    }

    public function sponsors() {
        return $this->belongsToMany('App\Sponsor');
    }
}
