<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Link;
use Auth;
use App\Comment;

class CommentsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function store(CommentRequest $request, Link $link)
    {
    	$comment = new Comment;

    	$comment->body = $request->input('body');
    	$comment->user_id = Auth::id();
    	$comment->link_id = $link->id;

    	$comment->save();

    	return redirect()->back();
    }
}
