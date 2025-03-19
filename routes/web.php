<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sheets\Facades\Sheets;

Route::get('/', function () {
  $posts = Sheets::collection('posts')->all();

  return view('posts.index', compact('posts'));
})->name('posts.index');

Route::get('/posts/{post}', function ($post) {
  return view('posts.show', compact('post'));
})->name('posts.show');
