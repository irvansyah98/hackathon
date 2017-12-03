<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UlasanProduk extends Model
{
   protected $table = 'ulasan_produk';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','produk_id','content','date_time'
    ];

    public function users()
    {
        return $this->belongsTo('App\User', 'users_id');
    }

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'produk_id');
    }
}
