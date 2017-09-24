<?php

namespace App;




class Post extends Model
{
    //
    //protected $fillable = ['title','body']; OR making model class 
   public function comments()
   {
   		return $this->hasMany(Comment::class);
   }

   public function user() //$post->user->name
    {
      return $this->belongsTo(User::class);
    }

   public function addComment($body)
   {

   	 Comment::create([

   	 		'body'=>request('body'),
     		'post_id'=> $this->id,
        'user_id'=> auth()->user()->id
     	]);

   	//***** OR *****

   //	$this->comments()->create(compact('body'));

   }
   public static function archives()
   {
      return static::selectraw('year(created_at) year,monthname(created_at)month,count(*) published')
                ->groupBy('year','month')
                ->orderByRaw('min(created_at) desc')
                ->get()
                ->toArray();
   }
}
