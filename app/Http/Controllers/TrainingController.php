<?php

namespace App\Http\Controllers;

use App\DTOs\TrainingDTO;
use App\Services\TrainingService;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    protected $trainingService;

    public function __construct(TrainingService $trainingService)
    {
        $this->trainingService = $trainingService;
    }

    public function index()
    {
        $trainings = $this->trainingService->getAllTrainings();
        return response()->json($trainings);
    }

    public function show($id)
    {
        $training = $this->trainingService->getTrainingById($id);
        return response()->json($training);
    }

    public function store(Request $request)
    {
        $trainingDTO = new TrainingDTO($request->all());
        $training = $this->trainingService->createTraining($trainingDTO);
        return response()->json($training, 201);

    }

    public function destroy($id)
    {
        $this->trainingService->deleteTraining($id);
        return response()->json(null, 204);
    }
}
