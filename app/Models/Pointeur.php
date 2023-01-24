<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pointage;

class Pointeur extends Model
{
    use HasFactory;
    protected $fillable=[
        'carte_id',
        'prenom',
        'nom',
        'email',
        'phone'
    ];
    public function pointages(){
        return $this->hasMany(pointage::class);
    }
}



BR7-fE!xx>79&aYq