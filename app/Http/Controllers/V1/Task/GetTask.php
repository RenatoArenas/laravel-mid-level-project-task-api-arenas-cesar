<?php

namespace App\Http\Controllers\V1\Task;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TaskResource;
use App\Models\V1\Task;
use App\Services\V1\Task\TaskService;
use Illuminate\Http\Request;

class GetTask extends Controller
{
    public function __construct(protected TaskService $taskService)
    {

    }

    public function __invoke(Task $task)
    {
        return TaskResource::make($task);
    }
}
