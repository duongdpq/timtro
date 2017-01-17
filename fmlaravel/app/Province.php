<?php

namespace App;
use App\District;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = ['name',
    ];
	public $timestamps = false;
	public function district(){
        return $this-> hasMany('App\District');
    }
}
