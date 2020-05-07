<?php

return [
    'production' => false,
    'baseUrl' => 'https://artisan-static-demo.netlify.com',
    'site' => [
        'title' => 'My Jigsaw Blog',
        'description' => 'Personal blog of John Doe.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'John Doe',
        'twitter' => 'johndoe',
        'github' => 'johndoe',
    ],
    'services' => [
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'cloudinary' => [
            'cloudName' => 'artisanstatic',
            'apiKey' => '365895137117119',
        ],
        'jumprock' => 'artisanstatic',
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isPost
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary->cloudName}/{$path}";
    },
];
