<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
	use SoftDeletes;
   protected $table = 'etalase';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','kategori_id','toko_id','jenis_produk','nama_produk','photo','deskripsi'
    ];

    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsTo('App\User', 'users_id');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }

    public function toko()
    {
        return $this->belongsTo('App\Toko', 'toko_id');
    }

    public function ulasan_produk()
    {
        return $this->hasMany('App\UlasanProduk', 'produk_id');
    }
}
