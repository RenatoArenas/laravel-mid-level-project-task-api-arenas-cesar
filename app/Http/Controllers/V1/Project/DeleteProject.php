<?php

namespace App\Http\Controllers\V1\Project;

use App\Http\Controllers\Controller;
use App\Models\V1\Project;
use App\Services\V1\Project\ProjectService;
use Illuminate\Http\Request;

class DeleteProject extends Controller
{
    public function __construct(protected ProjectService $projectService)
    {

    }

    public function __invoke(Project $project)
    {
        return $this->projectService->setModel($project)->delete();
    }
}
