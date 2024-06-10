<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercises extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'muscle_group',
        'tag',
        'link',
        'create_for'
    ];
}
