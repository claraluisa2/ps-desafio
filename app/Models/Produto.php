<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'preco',
        'quantidade',
        'categoria_id'
  ];

  public function categorias()
{
    return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
}

}
