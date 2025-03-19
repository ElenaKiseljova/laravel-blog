@props(['post'])

<li class="space-y-5  ">
  <h2 class="text-2xl font-medium">
    <a class=" hover:text-indigo-700 transition-colors duration-75"
      href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
  </h2>

  <div>{{ $post->excerpt }}</div>

  <x-post-meta :post="$post" />
</li>
