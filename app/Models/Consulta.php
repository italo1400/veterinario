<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $fillable = ['data', 'sintomas', 'animal_id'];

    public function Animal()
    {
        return $this->hasOne(Animal::class, 'id', 'animal_id');
    }

    public function Atendimento()
    {
        return $this->hasOne(Atendimento::class, 'consulta_id', 'id');
    }
}
