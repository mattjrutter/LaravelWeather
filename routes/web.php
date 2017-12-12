<?php

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/archive/{date}', 'PagesController@archive');

Route::get('/updateWeather', function(){
    return view('pages.updateWeather');
});

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
