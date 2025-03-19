<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Blog</title>
</head>

<body>
  <h1>My personal Blog</h1>

  @if ($posts->count())

    <ul>
      @foreach ($posts as $post)
        <li>
          <h2><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>

          <div>{{ $post->excerpt }}</div>
          <div>{{ $post->author }} / {{ $post->date->diffForHumans() }}</div>
        </li>
      @endforeach

    </ul>
  @else
    No posts found
  @endif
</body>

</html>
