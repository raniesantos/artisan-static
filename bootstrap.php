<?php

use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

function content_sanitize($value)
{
    return str_replace(["\r", "\n", "\r\n"], ' ', strip_tags($value));
}

function str_limit_soft($value, $limit = 100, $end = '...')
{
    if (mb_strlen($value, 'UTF-8') <= $limit) {
        return $value;
    }

    return rtrim(strtok(wordwrap($value, $limit, "\n"), "\n"), ' .') . $end;
}

function posts_filter($posts, $tag)
{
    return $posts->filter(function ($post) use ($tag) {
        return collect($post->tags)->contains($tag->name());
    });
}
