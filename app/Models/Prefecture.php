<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;

    public function getIdByName(string $name): int
    {
        return $this::firstWhere('name', $name)->id;
    }
}
