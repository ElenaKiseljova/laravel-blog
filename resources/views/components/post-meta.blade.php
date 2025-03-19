@props(['post'])

<div class="text-sm text-gray-400">Posted {{ $post->date->diffForHumans() }} by <a
    class="text-indigo-500 hover:text-indigo-700 transition-colors duration-75"
    href="{{ route('authors.show', $post->author_slug) }}">{{ $post->author_name }}</a></div>
