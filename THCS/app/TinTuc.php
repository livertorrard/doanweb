<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    //
    protected $table= "tintuc";

    public function loaitin(){
    	return $this->belongsTo('App\LoaiTin','id_loaitin','id');
    }

    public function comment(){
    	return $this->hasMany('App\Comment','id_tintuc','id');
    }
    public function user(){
    	return $this->belongsTo('App\User','id_tv','id');
    }
}
