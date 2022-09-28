<?php

use Illuminate\Support\Facades\Route;

Route::resource('albums', 'App\Http\Controllers\AlbumsController');
Route::resource('photos', 'App\Http\Controllers\PhotosController');