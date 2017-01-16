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

    /**
     * Creates relation with user
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * Create relation with comments
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
