<?php

use App\Http\Controllers\PlannerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect("/index");
});



Route::get('/index', [PlannerController::class, 'index'])->name('index');
Route::get('/show/{id}', [PlannerController::class, "show"]);
Route::get('/create', [PlannerController::class, "create"])->name('create');
Route::post('/store', [PlannerController::class, "store"]);
Route::get  ("/edit/{id}", [PlannerController::class, "edit"])->middleware("auth");
Route::put("/planners/{id}", [PlannerController::class, "update"])->middleware("auth");
Route::delete("planners/{id}", [PlannerController::class, "destroy"])->middleware("auth");  

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});

require __DIR__.'/auth.php';
