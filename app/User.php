<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email','password','photo','city','address','no_telp','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function toko()
    {
        return $this->hasMany('App\Toko', 'users_id');
    }

    public function produk()
    {
        return $this->hasMany('App\Produk', 'users_id');
    }

    public function ulasan_produk()
    {
        return $this->hasMany('App\UlasanProduk', 'users_id');
    }
}
