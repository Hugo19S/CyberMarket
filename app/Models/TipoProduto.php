<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TipoProduto extends Model
{
    protected $fillable = ['categoria_id', 'nome_tipo_produto'];
    protected $primaryKey = 'tipo_produto_id';
    protected $table = 'tipo_produto';
    use HasFactory;


    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

}
