<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/index', [WelcomeController::class,'index']);
Route::get('/about', [WelcomeController::class,'about']);
Route::get('/artikel', [WelcomeController::class,'artikel']);

Route::get('/world', function () {
return 'World';
});

// Route::get('/index', function () {
// return 'selamat datang';
// });

// Route::get('/about', function () {
// return 'Jonathan Dwi Pangestu / 244107020197';
// });

Route::get('/user/{name}', function ($name) {
return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/artikel/{id}', function ($id) {
// return 'halaman artikel dengan id = '.$id;
// });

Route::get('/user/{name?}', function ($name='John') {
return 'Nama saya '.$name;
});

Route::resource('photos', PhotoController::class)->only([
'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', [WelcomeController::class,
'greeting']);
