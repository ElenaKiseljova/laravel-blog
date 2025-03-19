<x-layout>
  @if ($posts->count())
    <ul class="mt-10 space-y-10">
      @foreach ($posts as $post)
        <li class="space-y-5  ">
          <h2 class="text-2xl font-medium">
            <a class=" hover:text-indigo-700 transition-colors duration-75"
              href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
          </h2>

          <div>{{ $post->excerpt }}</div>
          <div class="text-sm text-gray-400">Posted {{ $post->date->diffForHumans() }} by {{ $post->author }}</div>
        </li>
      @endforeach

    </ul>
  @else
    No posts found
  @endif
</x-layout>
