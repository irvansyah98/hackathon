<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Toko extends Model
{
	use SoftDeletes;
   protected $table = 'toko';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','nama_toko','deskripsi_toko','location_lat','location_long','location_name','location_description'
    ];
	protected $dates = ['deleted_at'];

	public function users()
    {
        return $this->belongsTo('App\User', 'users_id');
    }

    public function produk()
    {
        return $this->hasMany('App\Produk', 'users_id');
    }
}
