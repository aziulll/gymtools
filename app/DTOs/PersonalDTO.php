<?php

namespace App\DTOs;

class PersonalDTO
{
    public string $name;
    public string $cpf;
    public string $password;
    public string $email;
    public string $city;
    public string $neighborhood;
    public string $number;
    public ?string $complement;
    public string $cref;

    public function __construct(array $data)
    {
        $this->cref = $data['cref'];
        $this->name = $data['name'];
        $this->cpf = $data['cpf'];
        $this->password = bcrypt($data['password']);
        $this->email = $data['email'];
        $this->city = $data['city'];
        $this->neighborhood = $data['neighborhood'];
        $this->number = $data['number'];
        $this->complement = $data['complement'] ?? null;
    }

}
