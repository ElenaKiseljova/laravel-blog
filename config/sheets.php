<?php

return [
  'default_collection' => null,

  'collections' => [

    // Cllection
    'posts' => [
      'disk' => 'posts',
      'sheet_class' => App\Models\Post::class,
      'path_parser' => Spatie\Sheets\PathParsers\SlugWithDateParser::class,
      'content_parser' => Spatie\Sheets\ContentParsers\MarkdownWithFrontMatterParser::class,
      'extension' => 'md',
    ],
  ],
];
