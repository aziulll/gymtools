<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DTOs\ExercisesDTO;
use App\Services\ExercisesService;

class ExercisesController extends Controller
{
    protected $exercisesService;

    public function __construct(ExercisesService $exercisesService)
    {
    $this->exercisesService = $exercisesService;
    }

    public function store(Request $request)
    {
        $exerciseDTO = new ExercisesDTO($request->all());
        $exercise = $this->exercisesService->create($exerciseDTO);
        return response()->json($exercise, 201);
    }

    public function show($id)
    {
        $exercise = $this->exercisesService->read($id);
        return response()->json($exercise);
    }

}
