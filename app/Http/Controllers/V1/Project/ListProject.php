<?php

namespace App\Http\Controllers\V1\Project;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ProjectResource;
use App\Services\V1\Project\ProjectService;
use Illuminate\Http\Request;

class ListProject extends Controller
{
    public function __construct(protected ProjectService $projectService)
    {

    }

    public function __invoke()
    {
        $projects = $this->projectService->list();
        return ProjectResource::collection($projects);
    }
}
