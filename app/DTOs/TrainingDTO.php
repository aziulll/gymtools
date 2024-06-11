<?php

namespace App\DTOs;

use Illuminate\Http\Request;

class TrainingDTO
{
    public $name;
    public $id_patient;
    public $objetive;
    public $initial_date;
    public $final_date;
    public $create_for;

    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? 'default_name';
        $this->id_patient = $data['id_patient'];
        $this->objetive = $data['objective'] ?? 'default';
        $this->initial_date = $data['initial_date'];
        $this->final_date = $data['final_date'];
        $this->create_for = $data['create_for'] ?? 'default_create_for';
    }
}
