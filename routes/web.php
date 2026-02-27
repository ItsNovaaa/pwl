<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/hello', function () {
    return ('hello');
});

Route::get('/world', function () {
    return ('world');
});
Route::get('/user/{name}', function ($name) {
    return 'nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/user/{name?}', function ($name='john') {
return 'Nama saya '.$name;
});