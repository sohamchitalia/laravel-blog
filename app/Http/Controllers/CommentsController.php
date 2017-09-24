<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {

    //	Comment::create([

//    			'body'=>request('body'),
  //  			'post_id'=> $post->id
    //		]); 

    	// *** other way ****
    	$this->validate(request(), ['body' => 'required|min:7']);

    	$post ->addComment(request('body'));  //method in post.php

    	return back();
    }
}
