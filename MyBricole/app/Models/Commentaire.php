<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['bricole_id','commentaire'];
    public function bricole()
    {
        return $this->belongsTo(bricole::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
