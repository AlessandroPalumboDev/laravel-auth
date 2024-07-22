<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Guest\ProjectController as GuestProjectController;
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

// rotte pubbliche
Route::get('/projects', [GuestProjectController::class, 'index'])->name('projects');
Route::get('/projects/{project:id}', [GuestProjectController::class, 'show'])->name('projects.show');



//gruppo rotte
Route::middleware('auth', 'verified')
->name('admin.') //aggiunge un prefisso al name delle rotte nel gruppo
->prefix('admin') // aggiunge un prefisso agli url delle rotte nel gruppo
->group(function () {

    //  -> /admin
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //  -> /adimin/projects
    Route::resource('projects', ProjectController::class);

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
