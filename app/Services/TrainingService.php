<?php

namespace App\Services;

use App\DTOs\TrainingDTO;
use App\Models\Training;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrainingService
{
    public function getAllTrainings()
    {
        return Training::all();
    }

    public function getTrainingById($id)
    {
        return Training::findOrFail($id);
    }

    public function createTraining(TrainingDTO $trainingDTO): Training
    {

        $training = new Training((array)$trainingDTO);
        $training->create_for = Auth::user()->id;
        $training->save();

        return $training;
    }

    public function updateTraining(int $id, TrainingDTO $trainingDTO)
    {
        $training = Training::findOrFail($id);

        if ($training) {
            $training->update((array)$trainingDTO);
        }
        return $training;
    }

    public function deleteTraining($id)
    {
        $training = Training::findOrFail($id);
        if ($training) {
            $training->delete();
        }
        return $training;
    }
}
