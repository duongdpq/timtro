<?php

namespace App;
use App\User;
use App\Admin;
use App\Ward;
use Illuminate\Database\Eloquent\Model;

class Motel extends Model
{
    protected $table = 'motels';
    protected $fillable = [
        'name', 'number_room', 'area','price','price_water','price_electric','image','description','address','phone','lat','lng','mezzanine','internet','status','ward_id','user_id','admin_id',
    ];
    public $timestamps = true;
    public function user(){
		return $this->belongTo('App\User');
	}
	 public function admin(){
		return $this->belongTo('App\Admin');
	}
	 public function ward(){
		return $this->belongTo('App\Ward');
	}
	public function motelimages(){
		return $this-> hasMany('App\MotelImages');
	}
}
