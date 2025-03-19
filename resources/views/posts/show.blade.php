@extends('layout')

@section('content')
  <div class="mt-10 space-y-5 ">
    <h1 class=" text-2xl">{{ $post->title }}</h1>

    <div class="text-sm text-gray-400">Posted {{ $post->date->diffForHumans() }} by {{ $post->author }}</div>

    <div class="content space-y-3">{{ $post->contents }}</div>
  </div>
@endsection
