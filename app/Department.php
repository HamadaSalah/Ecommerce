<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    public function children() {
        return $this->hasMany('App\Department','id', 'parent');
    }
    // public function parentt() {
    //     return $this->belongsTo('App\Department','parent');
    // }
    

}
