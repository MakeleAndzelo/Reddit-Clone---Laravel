<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'body'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function link()
    {
    	return $this->belongsTo('App\Link');
    }

}