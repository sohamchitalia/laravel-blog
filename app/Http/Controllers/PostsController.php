<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use Image;

class PostsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {

    	
    		$posts = Post::latest();

            if($month = request('month')){
                $posts->whereMonth('created_at',Carbon::parse($month)->month);
            }

            if($year = request('year')){
                $posts->whereYear('created_at',$year);
            }

            $posts = $posts->get();


            $archives = Post::archives();


    	
    	return view('posts.index',compact('posts'));
    }


    public function show(Post $post)
    {
    	//$posts = Post::find($id);
    	return view('posts.show',compact('post'));
    }

    public function create()
    {
    	//$posts = Post::find($id);
    	return view('posts.create');
    }

    public function myblog()
    {
        $posts = Post::latest();

            if($month = request('month')){
                $posts->whereMonth('created_at',Carbon::parse($month)->month);
            }

            if($year = request('year')){
                $posts->whereYear('created_at',$year);
            }

            $posts = $posts->get();


            $archives = Post::archives();


        
        return view('posts.myblog',compact('posts'));
    }

    public function displayer($file_param)
    {
        return response()->download(storage_path('app/images/'.$file_param));
    }
    public function store(Request $request)
    {

    	//  ***** validation *******

    	$this->validate($request, array(

    		'title' => 'required',
    		'body' => 'required'

    		));

        $posts = new Post;

        //store values
        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->user_id = auth()->user()->id;

        if($request->hasFile('featured_image'))
        {
          //  $image = $request->file('featured_image');
           // $filename = time() . '.' . $image->getClientOriginalExtension();
           // $location = public_path('images/' , $filename);
           // Image::make($image)->resize(800, 400)->save($location);
            $image = $request->file('featured_image');
             $filename = str_random(20) . "." . $request->featured_image->extension();
        $request->featured_image->storeAs('images', $filename);
        Image::make($image)->resize(800, 400);
        $posts->image = $filename;

         //   $posts->image = $filename;
       }
        //save
        $posts->save();

    	//Post::create([

    	//	'title'=>request('title'),
    	//	'body'=>request('body'),
          //  'image' => request('featured_image'),
           // 'user_id'=>auth()->user()->id
            
    		//]);
    	
    	//redirect

    	return redirect('/');

    }
}

