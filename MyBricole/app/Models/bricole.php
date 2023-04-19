<?php

namespace App\Models;

use App\Models\bricole as ModelsBricole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bricole extends Model
{
    use HasFactory;

    public function categorie() 
    {
        return $this->belongsTo(Categorie::class);
    }
    public function commentaires(){
        return $this->hasMany(commentaire::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
