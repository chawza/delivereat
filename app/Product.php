<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function catering() {
        return $this->belongsTo('App\Catering');
    }

    public function carts() {
        return $this->hasMany('App\Cart');
    }
}
