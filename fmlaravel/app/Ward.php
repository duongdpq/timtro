<?php

namespace App;
use App\Motel;
use App\District;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'wards';
    protected $fillable = ['name','district_id',
    ];
	public $timestamps = false;
    public function motel(){
        return $this-> hasMany('App\Motel');
    }
    public function district(){
		return $this->belongTo('App\District');
	}
}
