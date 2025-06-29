<?php

declare(strict_types=1);

namespace ConduitUI\GithubIssues\Tests;

use ConduitUI\GithubIssues\GithubIssuesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            GithubIssuesServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'GithubIssues' => \ConduitUI\GithubIssues\Facades\GithubIssues::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('github-issues.default_timeout', 30);
    }
}
