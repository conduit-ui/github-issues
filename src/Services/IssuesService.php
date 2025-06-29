<?php

declare(strict_types=1);

namespace ConduitUI\GithubIssues\Services;

use ConduitUI\GithubConnector\GithubConnector;
use ConduitUI\GithubIssues\Contracts\ManagesIssueAssigneesInterface;
use ConduitUI\GithubIssues\Contracts\ManagesIssueLabelsInterface;
use ConduitUI\GithubIssues\Contracts\ManagesIssuesInterface;
use ConduitUI\GithubIssues\Traits\ManagesIssueAssignees;
use ConduitUI\GithubIssues\Traits\ManagesIssueLabels;
use ConduitUI\GithubIssues\Traits\ManagesIssues;

class IssuesService implements 
    ManagesIssuesInterface, 
    ManagesIssueAssigneesInterface, 
    ManagesIssueLabelsInterface
{
    use ManagesIssues;
    use ManagesIssueAssignees;
    use ManagesIssueLabels;

    public function __construct(
        private readonly GithubConnector $connector
    ) {}
}