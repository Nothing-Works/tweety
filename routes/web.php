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
Route::get('/profiles/{user:name}', 'ProfileController@show')->name('profile');
Route::post('/profiles/{user:name}/follow', 'FollowController@store');
