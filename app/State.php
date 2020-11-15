<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    
    protected $guarded = [];
    protected $table = 'states';
    public function country() {
        return $this->belongsTo('App\Country');
    }
    public function city() {
        return $this->belongsTo('App\City');
    }

}
