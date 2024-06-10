<?php

namespace App\DTOs;

class ExercisesDTO
{
    public string $name;
    public string $muscle_group;
    public string $tag;
    public string $link;
    public string $create_for;

    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? 'default_name';
        $this->muscle_group = $data['muscle_group'] ?? 'default_muscle_group';
        $this->tag = $data['tag'] ?? 'default_tag';
        $this->link = $data['link'] ?? 'default_link';
        $this->create_for = $data['create_for'] ?? 'default_create_for';
    }
}

