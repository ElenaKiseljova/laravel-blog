<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel Blog</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,700" rel="stylesheet" />

  <!-- Styles / Scripts -->
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @else
    <link href="{{ asset('css/tailwindcss.css') }}" rel="stylesheet" />
  @endif
</head>

<body class="">
  <div class=" max-w-screen-md px-5 py-10 mx-auto">
    <header class=" w-full flex justify-center mb-6 text-4xl font-bold text-center"><a
        href="{{ route('posts.index') }}">{{ config('app.name') }}</a></header>

    {{ $slot }}
  </div>
</body>

</html>
