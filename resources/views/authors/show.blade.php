<x-layout>
  <h1 class="text-3xl font-medium">
    Latest post by {{ $authorName }}
  </h1>

  <x-post-list :posts="$posts" />
</x-layout>
