<?php
use App\Http\Controllers\PlannerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PlannerController::class, "index"]);
Route::get('/show/{id}', [PlannerController::class, "show"]);
Route::get('/create', [PlannerController::class, "create"]);
Route::post('/store', [PlannerController::class, "store"]);