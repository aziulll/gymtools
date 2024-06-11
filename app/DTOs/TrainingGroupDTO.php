<?php

namespace App\DTOs;

use Illuminate\Http\Request;

class TrainingGroupDTO
{
    public $id_training;
    public $id_patient;
    public $id_exercise;
    public $create_for;

    public function __construct(array $data)
    {
        $this->id_training = $data['id_training'];
        $this->id_patient = $data['id_patient'];
        $this->id_exercise = $data['id_exercise'];
        $this->create_for = $data['create_for'];
    }
}
