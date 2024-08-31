<?php

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

