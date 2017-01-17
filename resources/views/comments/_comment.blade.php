<p>{{$comment->body}}</p>
<small>Submitted <strong>{{$comment->created_at->diffForHumans()}}</strong> by <strong>{{$comment->user->email}}</strong></small>
<hr>