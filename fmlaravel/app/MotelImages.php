<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotelImages extends Model
{
    protected $table = 'motel_images';
	protected $fillable = ['image','motel_id'];
	public $timestamps = true;
	public function product(){
		return $this->belongTo('App\Motel');
	}
}
