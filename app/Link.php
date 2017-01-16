<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{

	/**
	 * Properties that user can fill
	 * 
	 * @var array
	 */
    protected $fillable = [
    	'title',
    	'url'
    ];
}
