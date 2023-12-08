<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTechnologyController;
use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::resource('/project', ProjectController::class);

Route::resource('/technology', TechnologyController::class);

Route::get('/pivot/create', [ProjectTechnologyController::class, 'create'])->name('pivot.create');
Route::post('/pivot/store', [ProjectTechnologyController::class, 'store'])->name('pivot.store');

/*
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project/create', [ProjectController::class, 'create'])->name('procreate');
Route::get('/project/{id}/edit', [ProjectController::class, 'edit']);
Route::get('/project/{id}', [ProjectController::class, 'show']);


Route::get('/technology', [TechnologyController::class, 'index']);
Route::get('/technology/create', [TechnologyController::class, 'create']);
Route::get('/technology/{id}/edit', [TechnologyController::class, 'edit']);
Route::get('/technology/{id}', [TechnologyController::class, 'show']);

*/





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
