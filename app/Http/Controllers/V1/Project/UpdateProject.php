<?php

namespace App\Http\Controllers\V1\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Project\UpdateProjectRequest;
use App\Models\V1\Project;
use App\Services\V1\Project\Dtos\ProjectDto;
use App\Services\V1\Project\ProjectService;
use Illuminate\Http\Request;

class UpdateProject extends Controller
{
    public function __construct(protected ProjectService $projectService)
    {

    }

    public function __invoke(UpdateProjectRequest $request, Project $project)
    {
        $projectToUpdate = ProjectDto::fromArray($request->toArray());
        return $this->projectService->setModel($project)->update($projectToUpdate);
    }
}
