<x-layout>
  <div class="mt-10 space-y-5 ">
    <h1 class=" text-3xl font-medium">{{ $post->title }}</h1>

    <x-post-meta :post="$post" />

    <div class="content space-y-3">{{ $post->contents }}</div>
  </div>
</x-layout>
