<?php

namespace App\Http\Controllers;

use App\Models\exercises;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getAllExercises()
    {
        $exercises = exercises::all();
        return response()->json($exercises);
    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(exercises $exercises)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(exercises $exercises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, exercises $exercises)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(exercises $exercises)
    {
        //
    }
}
