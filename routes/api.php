<?php

use App\Http\Controllers\Api\LeadController;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('projects', [ProjectController::class, 'index']);
Route::get('projects/latest', [ProjectController::class, 'latest']);

// Route::get('show', [ProjectController::class, 'show']);
Route::get('projects/{project:slug}', [ProjectController::class, 'show']);


// Aggiungiamo la rotta per il form di contatto
Route::post('/mailable', [LeadController::class, 'store']);