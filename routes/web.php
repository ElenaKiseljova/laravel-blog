<?php

use App\Models\Post;
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

Route::get('/authors/{slug}', function ($slug) {
  $posts = Sheets::collection('posts')->all()->filter(fn(Post $post) => $post->author_slug === $slug);

  $authorName = $posts->first()->author_name;

  return view('authors.show', compact('posts', 'authorName'));
})->name('authors.show');

Route::get('/tags/{tag}', function ($tag) {
  $posts = Sheets::collection('posts')->all()->filter(fn(Post $post) => in_array($tag, ($post->tags ?? [])));

  return view('tags.show', compact('posts', 'tag'));
})->name('tags.show');
