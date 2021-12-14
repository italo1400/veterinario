<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoa;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'apelido', 'raca', 'especie', 'peso', 'cor', 'data_nascimento', 'pessoa_id'];

    public function Dono()
    {
        return $this->hasOne(Pessoa::class,'id','pessoa_id');
    }        
}
