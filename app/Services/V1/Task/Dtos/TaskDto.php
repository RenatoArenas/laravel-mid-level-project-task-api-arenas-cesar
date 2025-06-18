<?php

namespace App\Services\V1\Task\Dtos;

class TaskDto
{
    public function __construct(
        public readonly string $title,
        public readonly string $description,
        public readonly string $status,
        public readonly string $priority,
        public readonly string $due_date,
        public readonly string $project_id,
    ) {
    }

    public static function fromArray(array $attributes)
    {
        return new self(
            title: $attributes["title"],
            description: $attributes["description"],
            status: $attributes["status"],
            priority: $attributes["priority"],
            due_date: $attributes["due_date"],
            project_id: $attributes["project_id"],
        );
    }

    public function toArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
            'project_id' => $this->project_id,
        ];
    }
}