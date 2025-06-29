<?php

declare(strict_types=1);

namespace ConduitUI\GithubIssues\Contracts;

use ConduitUI\GithubIssues\Data\Issue;
use Illuminate\Support\Collection;

interface IssuesServiceInterface
{
    public function list(string $owner, string $repo, array $filters = []): Collection;

    public function get(string $owner, string $repo, int $issueNumber): Issue;

    public function create(string $owner, string $repo, array $data): Issue;

    public function update(string $owner, string $repo, int $issueNumber, array $data): Issue;

    public function close(string $owner, string $repo, int $issueNumber): Issue;

    public function reopen(string $owner, string $repo, int $issueNumber): Issue;

    public function addAssignees(string $owner, string $repo, int $issueNumber, array $assignees): Issue;

    public function removeAssignees(string $owner, string $repo, int $issueNumber, array $assignees): Issue;

    public function addLabels(string $owner, string $repo, int $issueNumber, array $labels): Issue;

    public function removeLabels(string $owner, string $repo, int $issueNumber, array $labels): Issue;
}