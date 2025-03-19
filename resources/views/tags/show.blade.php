<x-layout>
  <h1 class="text-3xl font-medium">
    Tagged {{ $tag }}
  </h1>

  <x-post-list :posts="$posts" />
</x-layout>
