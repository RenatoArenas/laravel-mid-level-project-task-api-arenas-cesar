<?php

namespace App\Http\Controllers\V1\Task;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TaskResource;
use App\Services\V1\Task\TaskService;
use Illuminate\Http\Request;

class ListTask extends Controller
{
    public function __construct(protected TaskService $taskService)
    {

    }

    public function __invoke()
    {
        $tasks = $this->taskService->list();
        return TaskResource::collection($tasks);
    }
}
