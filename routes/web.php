<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sheets\Facades\Sheets;

Route::get('/', function () {
  $posts = Sheets::collection('posts')->all();

  return view('posts.index', compact('posts'));
})->name('posts.index');

Route::get('/posts/{slug}', function ($slug) {
  $post = Sheets::collection('posts')->all()->where('slug', $slug)->first();

  abort_if(is_null($post), 404);

  return view('posts.show', compact('post'));
})->name('posts.show');
