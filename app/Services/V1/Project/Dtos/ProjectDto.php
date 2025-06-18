<?php

namespace App\Services\V1\Project\Dtos;

class ProjectDto
{
    public function __construct(
        public readonly string $name,
        public readonly string $description,
        public readonly string $status,
    ) {
    }

    public static function fromArray(array $attributes)
    {
        return new self(
            name: $attributes["name"],
            description: $attributes["description"],
            status: $attributes["status"]
        );
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'status' => $this->status,
        ];
    }
}