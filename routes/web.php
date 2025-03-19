<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.index');
})->name('posts.index');

Route::get('/posts/{post}', function ($post) {
    return view('posts.show', compact('post'));
})->name('posts.show');
