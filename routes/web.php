<?php

Route::get('/','PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{post}','PostsController@show');
Route::get('/myblog','PostsController@myblog')->name('myblog');

Route::post('/posts','PostsController@store'); 
Route::post('/posts/{post}/comments','CommentsController@store'); 

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create')->name('login');
Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');

Route::get('/download/{file_param}','PostsController@displayer');

?>