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

Route::post('/tweets/{tweet}/like', 'TweetLikesController@store')->middleware('auth');
Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy')->middleware('auth');
Route::get('/tweets', 'TweetController@index')->name('home');
Route::get('/explore', 'ExploreController');
Route::post('/tweets', 'TweetController@store');
Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile');
Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')->middleware('auth');
Route::put('/profiles/{user:username}', 'ProfileController@update')->middleware('auth');
Route::post('/profiles/{user:username}/follow', 'FollowController@store')->name('follow');
