<?php

namespace App\Http\Controllers\V1\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Project\CreateProjectRequest;
use App\Services\V1\Project\Dtos\ProjectDto;
use App\Services\V1\Project\ProjectService;
use Illuminate\Http\Request;
/**
 * @OA\Info(title="API Usuarios", version="1.0")
 *
 * @OA\Server(url="http://swagger.local")
 */
class CreateProject extends Controller
{
    public function __construct(protected ProjectService $projectService)
    {

    }
    /**
     * @OA\POST(
     *     path="/api/projects",
     *     summary="Mostrar Proyectos",
     *     @OA\Response(
     *         response=200,
     *         description="Mostrar todos los proyectos."
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *     )
     * )
     */
    public function __invoke(CreateProjectRequest $request)
    {
        $project = ProjectDto::fromArray($request->toArray());
        return $this->projectService->create($project);
    }
}
