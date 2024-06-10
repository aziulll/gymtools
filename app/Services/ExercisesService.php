<?php

namespace App\Services;

use App\DTOs\ExercisesDTO;
use App\Models\Exercises;
use Illuminate\Support\Facades\Auth;

class ExercisesService
{

    public function create(ExercisesDTO $exercisesdto): Exercises
    {
        $exercise = new Exercises((array)$exercisesdto);
        $exercise->create_for = Auth::user()->id;
        $exercise->save();
        return $exercise;
    }
    public function read(int $id): ?Exercises
    {
        return Exercises::find($id);
    }
}
