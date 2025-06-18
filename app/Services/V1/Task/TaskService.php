<?php

namespace App\Services\V1\Task;

use App\Models\V1\Task;
use App\Services\Service;
use App\Services\V1\Task\Dtos\TaskDto;

class TaskService extends Service
{
    public function list()
    {
        return Task::with('tasks')->get();
    }

    public function create(TaskDto $taskDto)
    {
        return Task::create($taskDto->toArray());
    }

    public function update(TaskDto $taskDto)
    {
        $model = $this->getModel();
        Task::where('id', $model->id)->update($taskDto->toArray());
        return $model->refresh();
    }

    public function delete()
    {
        $model = $this->getModel();
        return Task::where('id', $model->id)->delete();
    }
}