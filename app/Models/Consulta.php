<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $table = "consulta";
    protected $fillable = ['nome_consulta','tipo_consulta', 'data_consulta', 'hora', 'nome', 'contacto', 'mensagem'];

    public function departamento(){
        return $this->belongsTo('App\Models\Departamento');
    }
}
