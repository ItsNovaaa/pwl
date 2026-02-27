<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/hello', function () {
//     return ('hello');
// });

Route::get('/world', function () {
    return ('world');
});
Route::get('/user/{name}', function ($name) {
    return 'nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/user/{name?}', function ($name = 'john') {
    return 'Nama saya ' . $name;
});

route::get('/', [PageController::class, 'index']);
route::get('/about', [PageController::class, 'about']);
route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);