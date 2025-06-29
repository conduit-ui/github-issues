<?php

declare(strict_types=1);

namespace ConduitUI\GithubIssues\Contracts;

interface IssuesServiceInterface extends ManagesIssueAssigneesInterface, ManagesIssueLabelsInterface, ManagesIssuesInterface {}
