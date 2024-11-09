<?php

use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('portfolio.index');
});*/

// Rutas de las vistas del portafolio
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/about', [PortfolioController::class, 'about'])->name('portfolio.about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('portfolio.projects');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('portfolio.experience');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('portfolio.skills');
Route::get('/education', [PortfolioController::class, 'education'])->name('portfolio.education');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function () {
    /*Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');*/

    // Rutas para el admin
    Route::resource('experiences', ExperienceController::class);
    Route::resource('skills', SkillController::class);
    Route::resource('education', EducationController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('profile', ProfileController::class);
});

require __DIR__.'/auth.php';
