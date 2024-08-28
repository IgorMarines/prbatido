<?php

use App\Http\Controllers\ExercisesController;
use App\Http\Controllers\ProfileController;
use App\Models\Exercises;
use App\Models\IndividualPr;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $user = Auth::user();
    $userExercises = IndividualPr::where('user_id', $user->id)->get();

    return Inertia::render('Dashboard', [
        'userExercises' => $userExercises
    ]);
})->middleware(['auth', 'verified']);


Route::get('/exercicios', function () {
    return Inertia::render('Exercicios', [
        'exercises' => Exercises::all()
    ]);
})->middleware(['auth', 'verified'])->name('exercicios');

Route::get('/ranking', function () {
    return Inertia::render('Ranking');
})->middleware(['auth', 'verified'])->name('ranking');

Route::post('createNewPr', [ExercisesController::class, 'createNewPr'])->name('createNewPr');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
