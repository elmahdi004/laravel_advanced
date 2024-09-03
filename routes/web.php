<?php

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', function () {
    return Post::create([
        'content' => 'new content'
    ])->image()->create([
        'content' => 'new Content'
    ]);});
Route::get('/user', function () {
    return User::create([
        'name' => 'el mahdi bellaziz',
        'email' => 'elmahdibellaziz@gmail.com',
        'password' => '234567890-7373773'
    ])->image()->create([
        'content' => 'new Content'
    ]);
});
Route::get('/userget', function () {
    return Image::with('imageable')->get();
});
Route::get('/pagination',function(){
    $users =  User::paginate(10) ;
    return view('users',['users' => $users]);
});

// --- retrieve user by slug 
Route::get('/user/{user}',function(User $user){
    return $user;
})->missing(function(){
    return abort(403,'NOT FOUND , PLEASE TRY AGAIN');
});

// --- Route redirect 
Route::redirect('/elmahdi','/');

