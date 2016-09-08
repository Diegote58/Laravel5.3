<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    
	protected $table ="images";

	protected $fillable = ['name','article_id'];

	public function article(){
		return $this->belongsTo('App\Article');

	}
}
