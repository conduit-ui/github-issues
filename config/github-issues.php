<?php

return [
    /*
    |--------------------------------------------------------------------------
    | GitHub Issues Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration options for the GitHub Issues package.
    |
    */

    'default_timeout' => env('GITHUB_ISSUES_DEFAULT_TIMEOUT', 30),

    'rate_limit' => [
        'enabled' => env('GITHUB_ISSUES_RATE_LIMIT', true),
        'max_attempts' => env('GITHUB_ISSUES_MAX_ATTEMPTS', 5),
        'retry_delay' => env('GITHUB_ISSUES_RETRY_DELAY', 1000), // milliseconds
    ],

    'cache' => [
        'enabled' => env('GITHUB_ISSUES_CACHE_ENABLED', false),
        'ttl' => env('GITHUB_ISSUES_CACHE_TTL', 300), // seconds
        'prefix' => env('GITHUB_ISSUES_CACHE_PREFIX', 'github_issues'),
    ],
];