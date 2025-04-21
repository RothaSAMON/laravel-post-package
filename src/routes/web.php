<?php

use Blogify\PostManager\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::resource('posts', PostController::class);
});