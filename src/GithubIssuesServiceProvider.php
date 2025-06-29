<?php

declare(strict_types=1);

namespace ConduitUI\GithubIssues;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GithubIssuesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('github-issues')
            ->hasConfigFile();
    }
}
