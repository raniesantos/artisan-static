<!-- seo/social -->
<link rel="canonical" href="{{ $page->getUrl() }}">
<meta name="referrer" content="no-referrer-when-downgrade">
<meta name="author" content="{{ $page->owner->name }}">
<meta name="description" content="{!! $page->excerpt() ?: $page->site->description !!}">

<meta property="og:title" content="{{ $page->title ?: $page->site->title }}">
<meta property="og:description" content="{!! $page->excerpt() ?: $page->site->description !!}">
<meta property="og:image" content="{{ $page->image ?: $page->imageCdn($page->site->image) }}">
<meta property="og:type" content="{{ $page->isPost ? 'article' : 'website' }}">
<meta property="og:site_name" content="{{ $page->site->title }}">
<meta property="og:url" content="{{ $page->getUrl() }}">

<meta name="twitter:title" content="{{ $page->title ?: $page->site->title }}">
<meta name="twitter:description" content="{!! $page->excerpt() ?: $page->site->description !!}">
<meta name="twitter:image" content="{{ $page->image ?: $page->imageCdn($page->site->image) }}">
<meta name="twitter:creator" content="{{ "@{$page->owner->twitter}" }}">
<meta name="twitter:site" content="{{ "@{$page->owner->twitter}" }}">
<meta name="twitter:card" content="summary">
<!-- end seo/social -->
