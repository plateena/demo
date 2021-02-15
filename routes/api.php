<?php

use Illuminate\Support\Facades\Route;
use Plateena\Demo\Http\Controllers\PostController;

Route::resource('post', PostController::class);
