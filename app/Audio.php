<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
	protected $table = 'images';
	protected $fillable = ['path'];
	public $timestamps = true; 
}
