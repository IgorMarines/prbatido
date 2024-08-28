<?php

namespace App\Http\Controllers;

use App\Models\Exercises;
use App\Http\Controllers\Controller;
use App\Models\IndividualPr;
use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    public function getAllExercises()
    {
        $exercises = Exercises::all();
        return response()->json($exercises);
    }

    public function createNewPr(Request $request)
    {
        $auth = auth()->user();
        $exercise = new IndividualPr();
        $exercise->user_id = $auth->id;
        $exercise->exercise_id = $request->exercise_id;
        $exercise->weight = $request->weight;
        $exercise->reps = $request->reps;
        $exercise->sets = $request->sets;
        $exercise->date = $request->date;
        $exercise->save();
    }

    public function getExercisesOfUserLogged()
    {
        $auth = auth()->user();
        $exercises = IndividualPr::where('user_id', $auth->id)->get();
        return to_route('exercicios', ['userExercises' => $exercises]);
    }
}
