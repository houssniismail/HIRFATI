<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class categorie extends Model
{
    use HasFactory;

    public function bricoles()
    {
        return $this->hasMany(Bricole::class);
    }
}
