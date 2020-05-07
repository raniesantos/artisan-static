---
title: '07 - Code Highlighting'
date: 2020-04-27
image: https://res.cloudinary.com/artisanstatic/code.jpg
comments: false
---
Below are some examples of code blocks with syntax highlighting.

Go to `source/_assets/js/main.js` to view/change the registered languages.

Go to `source/_assets/sass/main.scss` to change the theme.

## HTML (and XML)

```html
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
```

## CSS

```css
html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
}
```

## JS

```js
window._ = require('lodash');
window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
```

## PHP

```php
<?php

namespace App\Http\Controllers;

use App\Status;

class LikeController extends Controller
{
    public function store(Status $status)
    {
        if (!$status->of_friend || $status->liked) {
            return response()->json(['flash' => 'Invalid operation.'], 422);
        }

        auth()->user()->like($status);

        return response()->json('liked', 201);
    }

    public function destroy(Status $status)
    {
        auth()->user()->unlike($status);

        return response()->json('unliked', 200);
    }
}
```

## Apache

```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```
