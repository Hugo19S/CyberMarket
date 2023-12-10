<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{

    protected $fillable = ['tipo_produto_id', 'fabricante_id', 'nome', 'sku',
        'descricao', 'preco', 'vendedor', 'quantidade', 'data_criacao', 'modelo'];
    protected $primaryKey = 'produto_id';
    protected $table = 'produto';


    use HasFactory;

    public function tipoProduto(): BelongsTo
    {
        return $this->belongsTo(TipoProduto::class, 'tipo_produto_id');
    }

    public function fabricante(): BelongsTo
    {
        return $this->belongsTo(Fabricante::class, 'fabricante_id');
    }
}
