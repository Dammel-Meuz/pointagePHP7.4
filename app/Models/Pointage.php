<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pointeur;

class Pointage extends Model
{
    use HasFactory;
    public function pointeur(){
        return $this->belongsTo(Pointeur::class)
    }
}

