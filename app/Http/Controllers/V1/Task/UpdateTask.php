<?php

namespace App\Http\Controllers\V1\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Task\UpdateTaskRequest;
use App\Models\V1\Task;
use App\Services\V1\Task\Dtos\TaskDto;
use App\Services\V1\Task\TaskService;

class UpdateTask extends Controller
{
    public function __construct(protected TaskService $taskService)
    {

    }

    public function __invoke(UpdateTaskRequest $request, Task $task)
    {
        $taskToUpdate = TaskDto::fromArray($request->toArray());
        return $this->taskService->setModel($task)->update($taskToUpdate);
    }
}
