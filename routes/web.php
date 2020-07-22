<?php

//DB query
// DB::listen(function ($query) {
//     var_dump($query->sql, $query->bindings);
// });

use App\User;
use Illuminate\Support\Facades\Route;

// $user = User::find(1);
// Auth::login($user);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/tweets', 'TweetController@index')->name('home');
Route::post('/tweets', 'TweetController@store');
Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile');
Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')->middleware('auth');
Route::put('/profiles/{user:username}', 'ProfileController@update')->middleware('auth');
Route::post('/profiles/{user:username}/follow', 'FollowController@store');
