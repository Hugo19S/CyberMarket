<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pedido extends Model
{
    protected $connection = 'mysql';
    protected $fillable = ['cliente_id', 'data_pedido', 'preco_total', 'status'];
    protected $primaryKey = 'pedido_id';
    protected $table = 'pedido';

    use HasFactory;

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function pagamento(): HasMany
    {
        return $this->hasMany(Pagamento::class, 'pedido_id');
    }

    public function pedidoProduto(): HasMany
    {
        return $this->hasMany(PedidoProduto::class, 'pedido_id');
    }
}
