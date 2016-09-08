<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//variable con el nombre tabla BD
	protected $table = "categories";
	//propiedad Name
	protected $fillable = ['name'];

	public function articles(){
		return $this->hasMany('App\Article');
	}	
}
