<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
	protected $table="projects";

	public function leader_project(){
		return $this-> hasOne('App\User');
	}
	public function user(){
		return $this->hasMany('App\User');
	}
	public function company(){
		return $this->belongsTo('App\Company');
	}
}
