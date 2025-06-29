<?php

declare(strict_types=1);

namespace ConduitUI\GithubIssues\Services;

use ConduitUI\GithubConnector\GithubConnector;
use ConduitUI\GithubIssues\Contracts\IssuesServiceInterface;
use ConduitUI\GithubIssues\Traits\ManagesIssueAssignees;
use ConduitUI\GithubIssues\Traits\ManagesIssueLabels;
use ConduitUI\GithubIssues\Traits\ManagesIssues;

class IssuesService implements IssuesServiceInterface
{
    use ManagesIssues;
    use ManagesIssueAssignees;
    use ManagesIssueLabels;

    public function __construct(
        private readonly GithubConnector $connector
    ) {}
}