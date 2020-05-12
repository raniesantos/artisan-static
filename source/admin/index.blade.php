<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin | {{ $page->site->title }}</title>
    @include('_partials.head.favicon')
    @include('_partials.cms.identity_widget')
</head>
<body>
    <script src="https://unpkg.com/netlify-cms{{ "@{$page->services->cmsVersion}" }}/dist/netlify-cms.js"></script>
</body>
</html>
