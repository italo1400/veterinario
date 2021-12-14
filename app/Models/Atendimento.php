<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;
    protected $fillable = ['diagnostico', 'pedido_exames', 'resultado_exames', 'consulta_id'];

    public function Consulta()
    {
        return $this->hasOne(Consulta::class, 'id', 'consulta_id');
    }    
}
