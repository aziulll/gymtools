<?php

namespace App\Services;

use App\DTOs\PersonalDTO;
use App\Models\User;

class PersonalService
{
    public function read(int $id): ?User
    {
        return User::find($id);
    }

    public function update(int $id, PersonalDTO $personalDTO): ?User
    {
        $User = User::find($id);
        if ($User) {
            $User->update((array)$personalDTO);
        }
        return $User;
    }

    public function delete(int $id): bool
    {
        $User = User::find($id);
        if ($User) {
            return $User->delete();
        }
        return false;
    }


}
