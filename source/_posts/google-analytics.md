---
title: '03 - Google Analytics'
date: 2021-06-13
image: https://res.cloudinary.com/artisanstatic/analytics.jpg
comments: false
---
Register the website on [Google Analytics](https://analytics.google.com/analytics/web).

Get your **tracking ID**, go to `config.php` and add your ID under the `services` key.

The master template is designed to only include analytics in production. This is to avoid tracking page views while you are developing the site.
