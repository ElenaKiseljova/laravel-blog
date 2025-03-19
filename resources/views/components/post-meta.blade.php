@props(['post'])

<div class="flex items-center justify-between">
  <div class="text-sm text-gray-400">Posted {{ $post->date->diffForHumans() }} by <a
      class="text-indigo-500 hover:text-indigo-700 transition-colors duration-75"
      href="{{ route('authors.show', $post->author_slug) }}">{{ $post->author_name }}</a></div>

  @if (count($post->tags))
    <div class=" flex flex-row items-center space-x-2 mt-4">
      @foreach ($post->tags as $tag)
        <a href="{{ route('tags.show', $tag) }}" class="hover:opacity-75 transition-opacity duration-75 ease-in">
          <span
            class="bg-indigo-500 text-white capitalize inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium leading-5">{{ $tag }}</span>
        </a>
      @endforeach
    </div>
  @endif
</div>
