<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\API\FileController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\CategoryController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/faculty', [ProfileController::class, 'index']);

Route::get('/project', [ProjectController::class, 'index']);

Route::get('/task', [TaskController::class, 'index']);

Route::get('/file', [FileController::class, 'index']);

Route::get('/role', [RoleController::class, 'index']);

Route::get('/category', [CategoryController::class, 'index']);
