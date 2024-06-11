<?php

namespace App\Http\Controllers;

use App\DTOs\TrainingGroupDTO;
use App\Services\TrainingGroupService;
use Illuminate\Http\Request;

class TrainingGroupController extends Controller
{
    protected $trainingGroupService;

    public function __construct(TrainingGroupService $trainingGroupService)
    {
        $this->trainingGroupService = $trainingGroupService;
    }

    public function store(Request $request)
    {
        $trainingGroupDTO = new TrainingGroupDTO($request->all());
        $training = $this->trainingGroupService->createTrainingGroup($trainingGroupDTO);

        return response()->json(["message" => "sucess", $training, 201]);
    }

}
