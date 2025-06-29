<?php

declare(strict_types=1);

namespace ConduitUI\GithubIssues\Data;

use DateTime;

readonly class Issue
{
    public function __construct(
        public int $id,
        public int $number,
        public string $title,
        public ?string $body,
        public string $state,
        public bool $locked,
        public array $assignees,
        public array $labels,
        public ?string $milestone,
        public int $comments,
        public DateTime $createdAt,
        public DateTime $updatedAt,
        public ?DateTime $closedAt,
        public string $htmlUrl,
        public User $user,
        public ?User $assignee = null,
        public ?User $closedBy = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            number: $data['number'],
            title: $data['title'],
            body: $data['body'],
            state: $data['state'],
            locked: $data['locked'],
            assignees: array_map(fn ($assignee) => User::fromArray($assignee), $data['assignees'] ?? []),
            labels: array_map(fn ($label) => Label::fromArray($label), $data['labels'] ?? []),
            milestone: $data['milestone']['title'] ?? null,
            comments: $data['comments'],
            createdAt: new DateTime($data['created_at']),
            updatedAt: new DateTime($data['updated_at']),
            closedAt: $data['closed_at'] ? new DateTime($data['closed_at']) : null,
            htmlUrl: $data['html_url'],
            user: User::fromArray($data['user']),
            assignee: $data['assignee'] ? User::fromArray($data['assignee']) : null,
            closedBy: $data['closed_by'] ? User::fromArray($data['closed_by']) : null,
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'number' => $this->number,
            'title' => $this->title,
            'body' => $this->body,
            'state' => $this->state,
            'locked' => $this->locked,
            'assignees' => array_map(fn (User $assignee) => $assignee->toArray(), $this->assignees),
            'labels' => array_map(fn (Label $label) => $label->toArray(), $this->labels),
            'milestone' => $this->milestone,
            'comments' => $this->comments,
            'created_at' => $this->createdAt->format('c'),
            'updated_at' => $this->updatedAt->format('c'),
            'closed_at' => $this->closedAt?->format('c'),
            'html_url' => $this->htmlUrl,
            'user' => $this->user->toArray(),
            'assignee' => $this->assignee?->toArray(),
            'closed_by' => $this->closedBy?->toArray(),
        ];
    }

    public function isOpen(): bool
    {
        return $this->state === 'open';
    }

    public function isClosed(): bool
    {
        return $this->state === 'closed';
    }
}
