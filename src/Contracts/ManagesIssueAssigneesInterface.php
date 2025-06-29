<?php

declare(strict_types=1);

namespace ConduitUI\GithubIssues\Contracts;

use ConduitUI\GithubIssues\Data\Issue;

interface ManagesIssueAssigneesInterface
{
    public function addAssignees(string $owner, string $repo, int $issueNumber, array $assignees): Issue;

    public function removeAssignees(string $owner, string $repo, int $issueNumber, array $assignees): Issue;

    public function assignIssue(string $owner, string $repo, int $issueNumber, string $assignee): Issue;

    public function unassignIssue(string $owner, string $repo, int $issueNumber, string $assignee): Issue;
}
