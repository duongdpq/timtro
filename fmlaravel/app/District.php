<?php

namespace App;
use App\Ward;
use App\Province;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $fillable = ['name','province_id',
    ];
	public $timestamps = false;
	public function ward(){
        return $this-> hasMany('App\Ward');
    }
    public function province(){
		return $this->belongTo('App\Province');
	}
}
