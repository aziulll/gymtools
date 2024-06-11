<?php

namespace App\Services;

use App\DTOs\TrainingGroupDTO;
use App\Models\TrainingGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrainingGroupService
{

    public function createTrainingGroup(TrainingGroupDTO $trainingGroupDTO): TrainingGroupDTO
    {
        $training = new TrainingGroupDTO((array)$trainingGroupDTO);
        $training->create_for = Auth::user()->id;

        $training->save();

        return $training;
    }

}
