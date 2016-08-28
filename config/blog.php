<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Canvas Configuration : SEO
  |--------------------------------------------------------------------------
  |
  | Here you may define all of the blog meta tags and SEO for your
  | application. These will be used for web scraping and open
  | graph tags on sites such as Facebook and Twitter.
  |
  */
  'title'           => 'Clément DOUIN',
  'subtitle'        => "Blog et portfolio d'un développeur web freelance passionné",
  'description'     => 'Blog et portfolio de Clément DOUIN, développeur web freelance passionné, disponible pour tous vos projets web',
  'author'          => 'Clément DOUIN',
  'seo'             => 'blog,blogging,portfolio,projets,clément douin,laravel,mysql,nginx,git,github,php,développeur web',

  /*
  |--------------------------------------------------------------------------
  | Canvas Configuration : Blog Posts
  |--------------------------------------------------------------------------
  |
  | Pretty self-explanatory here. Indicate how many posts you would like
  | to appear on each page. If you are using Disqus, specify the
  | identifier in your .env file.
  |
  */
  'posts_per_page'  => 3,
  'disqus_name' => env('DISQUS_NAME', null),

  /*
  |--------------------------------------------------------------------------
  | Canvas Configuration : Media Uploads
  |--------------------------------------------------------------------------
  |
  | Specify what type of storage you would like for your application. Just
  | as a reminder, your uploads directory MUST be writable by the
  | web server for the uploading to function properly.
  |
  | Supported: "local"
  |
  */
  'uploads'         => [
    'storage'       => 'local',
    'webpath'       => '/uploads/',
  ],

  'trim_width'  => 40,
];
