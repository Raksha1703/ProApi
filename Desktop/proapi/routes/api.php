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
Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/profile', [ProfileController::class, 'save']);

Route::get('/project', [ProjectController::class, 'index']);
Route::post('/project', [ProjectController::class, 'save']);
Route::put('/products/{id}', [ProjectController::class, 'update']);
Route::delete('/project{$id}', [ProjectController::class, 'delete']);


Route::get('/task', [TaskController::class, 'index']);
Route::post('/task', [TaskController::class, 'save']);

Route::get('/file', [FileController::class, 'index']);
Route::post('/file', [FileController::class, 'save']);

Route::get('/role', [RoleController::class, 'index']);
Route::post('/role', [RoleController::class, 'save']);

Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'save']);
