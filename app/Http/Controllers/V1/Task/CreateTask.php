<?php

namespace App\Http\Controllers\V1\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Task\CreateTaskRequest;
use App\Models\V1\Project;
use App\Services\V1\Task\Dtos\TaskDto;
use App\Services\V1\Task\TaskService;

class CreateTask extends Controller
{
    public function __construct(protected TaskService $taskService)
    {

    }

    public function __invoke(CreateTaskRequest $request)
    {
        $taskArray = $request->toArray();
        $task = TaskDto::fromArray($taskArray);

        return $this->taskService->create($task);
    }
}
