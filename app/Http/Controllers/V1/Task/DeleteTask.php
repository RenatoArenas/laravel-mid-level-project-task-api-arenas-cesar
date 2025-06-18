<?php

namespace App\Http\Controllers\V1\Task;

use App\Http\Controllers\Controller;
use App\Models\V1\Task;
use App\Services\V1\Task\TaskService;
use Illuminate\Http\Request;

class DeleteTask extends Controller
{
    public function __construct(protected TaskService $taskService)
    {

    }

    public function __invoke(Task $task)
    {
        return $this->taskService->setModel($task)->delete();
    }
}
