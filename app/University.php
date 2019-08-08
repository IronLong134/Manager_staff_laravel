<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
	protected $table="universities";
	public function user(){
		return $this->hasMany('App/User');
	}
}
