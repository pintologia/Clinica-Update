<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogue extends Model
{
    use HasFactory;
    protected $table = "blogue";
    protected $fillable = ['titulo','imagem', 'descricao', 'user_id'];
    
    public function rules() {
        return [
            'titulo' => 'required|max:1000',
            'imagem' => 'file|mimes:png,jpeg,jpg',
            'user_id' => 'exists:users,id',
        ];
    }
}
