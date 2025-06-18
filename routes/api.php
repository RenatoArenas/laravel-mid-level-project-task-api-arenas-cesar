<?php

use App\Http\Controllers\V1\Project\CreateProject;
use App\Http\Controllers\V1\Project\DeleteProject;
use App\Http\Controllers\V1\Project\GetProject;
use App\Http\Controllers\V1\Project\ListProject;
use App\Http\Controllers\V1\Project\UpdateProject;
use App\Http\Controllers\V1\Task\CreateTask;
use App\Http\Controllers\V1\Task\DeleteTask;
use App\Http\Controllers\V1\Task\GetTask;
use App\Http\Controllers\V1\Task\ListTask;
use App\Http\Controllers\V1\Task\UpdateTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/projects', ListProject::class);
Route::get('/projects/{project}', GetProject::class);
Route::post('/projects', CreateProject::class);
Route::put('/projects/{project}', UpdateProject::class);
Route::delete('/projects/{project}', DeleteProject::class);


Route::post('/tasks', CreateTask::class);
Route::get('/tasks', ListTask::class);
Route::get('/tasks/{task}', GetTask::class);
Route::put('/tasks/{task}', UpdateTask::class);
Route::delete('/tasks/{task}', DeleteTask::class);