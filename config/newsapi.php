<?php

return [
    'host' => env('NEWSAPI_HOST', 'https://newsapi.org/'),
    'version' => env('NEWSAPI_VERSION', 'v2/'),
    'token' => env('NEWSAPI_TOKEN', '894045d02bef49829a9608208f2175fa'),
    'retry' => env('NEWSAPI_RETRY', 3),
    'sleep' => env('NEWSAPI_SLEEP', 150)
];
