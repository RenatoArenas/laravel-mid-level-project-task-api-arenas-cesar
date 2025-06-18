<?php

namespace App\Services\V1\Project;

use App\Models\V1\Project;
use App\Services\Service;
use App\Services\V1\Project\Dtos\ProjectDto;

class ProjectService extends Service
{
    public function list()
    {
        return Project::with('tasks')->get();
    }

    public function create(ProjectDto $projectDto)
    {
        return Project::create($projectDto->toArray());
    }

    public function update(ProjectDto $projectDto)
    {
        $model = $this->getModel();
        Project::where('id', $model->id)->update($projectDto->toArray());
        return $model->refresh();
    }

    public function delete()
    {
        $model = $this->getModel();
        return Project::where('id', $model->id)->delete();
    }
}