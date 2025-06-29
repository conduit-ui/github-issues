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
    use ManagesIssueAssignees;
    use ManagesIssueLabels;
    use ManagesIssues;

    public function __construct(
        private readonly GithubConnector $connector
    ) {}
}
