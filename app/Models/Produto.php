<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{

    protected $fillable = ['tipo_produto_id', 'fabricante_id', 'nome', 'sku',
        'descricao', 'preco', 'vendedor', 'quantidade', 'data_criacao', 'modelo', 'created_at', 'updated_at'];
    protected $primaryKey = 'produto_id';
    protected $table = 'produto';

    public $timestamps = true;


    use HasFactory;

    public function tipoProduto(): BelongsTo
    {
        return $this->belongsTo(TipoProduto::class, 'tipo_produto_id');
    }

    public function fabricante(): BelongsTo
    {
        return $this->belongsTo(Fabricante::class, 'fabricante_id');
    }

    public function imagens(): HasMany
    {
        return $this->hasMany(Imagem::class, 'produto_id');
    }



}
