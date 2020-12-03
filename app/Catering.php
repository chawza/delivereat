<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'catering_name', 'catering_email', 'catering_password', 'catering_phone_number', 'catering_image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'catering_password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'catering_verified_at' => 'datetime',
    ];

    public function address() {
        return $this->morphOne('App\Address', 'addressable');
    }

    public function products() {
        return $this->hasMany('App\Product');
    }
}
